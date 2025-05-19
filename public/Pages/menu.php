<?php
@$pages = $_GET['pages'];
switch ($pages) {
    case 'table':

        //component
        include "Pages/content.php";
        break;

    case 'form':
        include "Pages/form.php";
        break;

    case 'invoice':
        include "Pages/invoice.php";
        break;

    case 'blank':
        include "Pages/Blank.php";
        break;

    case 'login':
        include "Pages/login.php";
        break;

    case 'register':
        include "Pages/register.php";
        break;

    case 'modal':
        include "Pages/modal.php";
        break;

    case 'dash1':
        include "Pages/Dashboard 1.php";
        break;

    case 'dash2':
        include "Pages/Dashboard 2.php";
        break;

    case 'dash3':
        include "Pages/error-404.php";
        break;

    case 'dash4':
        include "Pages/Dashboard 4.php";
        break;

    case 'dash5':
        include "Pages/Dashboard 5.php";
        break;

        //php dasar

    case 'intro':
        include "pendahuluan/01 intro.php";
        break;

    case 'intro_hasil':
        include "pendahuluan/intro.php";
        break;

    case 'install':
        include "pendahuluan/02 instalasi.php";
        break;

    case 'skrip':
        include "pendahuluan/03 skrip dasar.php";
        break;

    case 'skrip_hasil':
        include "pendahuluan/skrip dasar.php";
        break;

    case 'variable':
        include "pendahuluan/04 variable.php";
        break;

    case 'variable_hasil':
        include "pendahuluan/variable.php";
        break;

    case 'data':
        include "pendahuluan/05 tipe data.php";
        break;

    case 'data_hasil':
        include "pendahuluan/tipe data.php";
        break;

    case 'operator':
        include "pendahuluan/06 operator.php";
        break;

    case 'operator_hasil':
        include "pendahuluan/operator.php";
        break;

    case 'if':
        include "pendahuluan/07 percabangan.php";
        break;

    case 'if_hasil':
        include "pendahuluan/percabangan.php";
        break;

    case 'switch':
        include "pendahuluan/07 switch.php";
        break;

    case 'switch_hasil':
        include "pendahuluan/switch.php";
        break;

    case 'for':
        include "pendahuluan/08 perulangan for.php";
        break;

    case 'for_hasil':
        include "pendahuluan/perulangan for.php";
        break;

    case 'while':
        include "pendahuluan/08 perulangan while.php";
        break;

    case 'while_hasil':
        include "pendahuluan/perulangan while.php";
        break;

    case 'do':
        include "pendahuluan/08 perulangan do while.php";
        break;

    case 'do_hasil':
        include "pendahuluan/perulangan do while.php";
        break;

    case 'foreach':
        include "pendahuluan/08 perulangan for each.php";
        break;

    case 'foreach_hasil':
        include "pendahuluan/perulangan for each.php";
        break;

    case 'arr1':
        include "pendahuluan/09 array.php";
        break;

    case 'arr1_hasil':
        include "pendahuluan/array.php";
        break;

        case 'arr2':
            include "pendahuluan/09 array2.php";
            break;

            case 'arr2_hasil':
                include "pendahuluan/array2.php";
                break;

        // crud

    case 'crud_dasar':
        include "crud/crud.php";
        break;

    case 'crud_inn':
        include "crud_inner_1/crud-in.php";
        break;

        //pendalaman

        case 'foreach_dalem':
            require_once "pendalaman/01 foreach.php";
            break;

            case 'foreach_dalem_hasil':
                require_once "pendalaman/foreach.php";
                break;

    case 'foreach_db':
        require_once "pendalaman/02 foreach_db.php";
        require_once "pendalaman/data_siswa.php";
        break;

        case 'built-in_fun':
            require_once "pendalaman/03 built-in_function.php";
            break;

            case 'built-in_fun_hasil':
                require_once "pendalaman/built-in_function.php";
                break;

                case 'user_define1':
                    require_once "pendalaman/04 user define function 1.php";
                    break;

                    case 'user_define1_hasil':
                        require_once "pendalaman/user define function 1.php";
                        break;

                        case 'user_define2':
                            require_once "pendalaman/05 user define function 2.php";
                            break;

                            case 'user_define2_hasil':
                                require_once "pendalaman/user define function 2.php";
                                break;



        //tugas

    case 'bangun_ruang':
        include "Tugas/bangun ruang.php";
        break;

        //Ujian

    case 'pts_ganjil':
        include "pts_ganjil/crud-pts.php";
        break;

    default:
        include "dashboard 1.php";
        break;
}
