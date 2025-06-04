<?php

namespace App\Repository\Transaction;

use App\Contracts\Transaction\TransactionInterface;
use App\Models\Product;
use App\Models\Student;
use App\Models\Transaction;

class TransactionRepo implements TransactionInterface
{

    public function order(array $attributes)
    {
        $student = auth()->user()->UserReference->reference;
        if (isset($student)) {
            if ($student instanceof Student) {
                if ($student->saldo->saldo > 0) {
                    if (isset($attributes['product_id'])) {
                        $product = Product::find($attributes['product_id']);
                        if ($student->saldo->saldo >= $product->price) {
                            $transaction = Transaction::create([
                                'debt' => $attributes['paid'] -  $product->price,
                                'paid' => $attributes['paid'],
                                'product_id' => $attributes['product_id'],
                                'student_id' => $student->getKey(),

                            ]);
                        } else {
                            return back()->withErrors([
                                'error' => 'Saldo Tidak Mencukupi.',
                            ]);
                        }
                    } else {
                        return back()->withErrors([
                            'error' => 'belum ada product yang d pilih.',
                        ]);
                    }
                } else {
                    return back()->withErrors([
                        'error' => 'siswa tidak punya saldo',
                    ]);
                }
            } else {
                return back()->withErrors([
                    'error' => 'Yang order wajib siswa.',
                ]);
            }
        }

        return $student;
    }


    public function index(array $attributes = [])
    {
        return Transaction::with('student', 'product')->orderBy('updated_at', 'DESC');
    }


    public function getOrdersByStatus(int $employeeId, array $statusArray)
    {
        return Transaction::whereIn('status', $statusArray)
            ->whereHas('product.room.employeehasroom', function ($q) use ($employeeId) {
                $q->where('employee_id', $employeeId);
            })
            ->with([
                'product',
                'student',
                'product.room',
            ])
            ->orderByRaw(
                "FIELD(status, " . implode(",", $statusArray) . ")"
            )
            ->orderBy('created_at', 'ASC')
            ->get();
    }

    public function status(int $orderId, int $status)
    {
        $order = Transaction::find($orderId);

        if ($order) {
            $order->update([
                'status' => $status,
            ]);
            if ($status == Transaction::STATUS_COMPLETE) {
                $order->student->saldo->saldo  -= $order->product->price;
                $order->student->saldo->save();
                
                $employee = auth()->user()->UserReference->reference;
                $employee->saldo->saldo += $order->product->price;
                $employee->saldo->save();


            }
        }
    }
}
