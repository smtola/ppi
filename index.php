<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./assets/css/themes.css">
    <link rel="stylesheet" href="./assets/css/course_styles.css">
    <link rel="stylesheet" href="./assets/css/information_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Menu this page -->
    <?php
        include_once "./include/menu.php";
    ?>

    <!-- slide-image -->
    <div class="slide-container">
        <div class="image-wrapper">
            <?php
            include "./admin/config/class.php";
            $obj = new myclass;
            $i = 0;
            $query = $obj->select("tblpictures");
            while ($row = mysqli_fetch_assoc($query)) {
                $img = $row['file'];
            ?>
            <img src="./admin/upload/<?php echo $img; ?>" class="active">
            <?php }?>
        </div>
        
        <div class="btn-container">
            <button class="prev"><i class="bi bi-arrow-left"></i></button>
            <button class="next"><i class="bi bi-arrow-right"></i></button>
        </div>
    </div>
    <!-- end-slide-image -->
    <div class="bg-marquee">
        <marquee behavior="scroll" scrolldelay="80" onmouseover="this.stop();" onmouseout="this.start();">
            <p>វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ (PPI) មានទីតាំងតែមួយគត់ ការិយាល័យទទួលពាក្យតែមួយកន្លែងគត់ មិនមាននៅកន្លែងផ្សេងទេ ដូច្នេះមុនពេលប្អូនៗទទួលពាក្យចុះឈ្មោះចូលរៀនសូមពិនិត្យពាក្យនោះឱ្យបានច្បាស់លាស់ថា វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈឬមិនមែន។ ទីតាំងស្ថិតនៅតាមបណ្តោយមហាវិថីសហព័ន្ធរុស្សី ច្រកចូលខាងកើតក្រុមហ៊ុន Metfone និងវត្តទឹកថ្លា ចម្ងាយ 180ម៉ែត្រ ។ ចាប់ផ្តើមទទួលពាក្យថ្នាក់អាហារូបករណ៍ (100%) និងថ្នាក់សិក្សាបង់ថ្លៃ 1. វិស្វកម្មអគ្គិសនី 2. វិស្វកម្មសំណង់ស៊ីវិល 3. វិស្វកម្មអេឡិចត្រូនិក 4. បច្ចេកវិទ្យាព័ត៌មាន 5. គណនេយ្យនិងហិរញ្ញវត្ថុ 6. គ្រប់គ្រង 7. ម៉ាឃិតធីង ទំនាក់ទនងលេខ៖ 016528800, 011760000, 012515584, 012707544, 017355283, 015206056, 086477746, 098696005, 081413151 ។</p>
        </marquee>
    </div>

    <div class="container-fluid">
        <div class="section-title">
            <h3>មហាវិទ្យាល័យ</h3>
            <p>ជ្រើសរើសវិទ្យាល័យតាមជំនាញ់ណាមួយ</p>
        </div>

        <div class="container-items">
            <div class="course-items">
                <div class="course-thumb">
                    <img src="https://preview.colorlib.com/theme/unica/img/course/1.jpg" alt="course">
                </div>
                <div class="course-info">
                    <h4>មហាវិទ្យាល័យអគ្គិសនី : <span class="sec_text text1"></span></h4>
                </div>
            </div>
            <div class="course-items">
                <div class="course-thumb">
                    <img src="https://preview.colorlib.com/theme/unica/img/course/1.jpg" alt="course">
                </div>
                <div class="course-info">
                    <h4>មហាវិទ្យាល័យអគ្គិសនី : <span class="sec_text text2"></span></h4>
                </div>
            </div>
            <div class="course-items">
                <div class="course-thumb">
                    <img src="https://preview.colorlib.com/theme/unica/img/course/1.jpg" alt="course">
                </div>
                <div class="course-info">
                    <h4>មហាវិទ្យាល័យអគ្គិសនី : <span class="sec_text text3"></span></h4>
                </div>
            </div>
            <div class="course-items">
                <div class="course-thumb">
                    <img src="https://preview.colorlib.com/theme/unica/img/course/1.jpg" alt="course">
                </div>
                <div class="course-info">
                    <h4>មហាវិទ្យាល័យអគ្គិសនី : <span class="sec_text text4"></span></h4>
                </div>
            </div>

        </div>
    </div>

    <div class="content-transparent"> </div>

    <div class="cont-info" style="margin: 2.5rem 0;">
        <div class="section-title">
            <h3>ព័ត៌មានបន្ថែម</h3>
        </div>

        <div class="container_info">
            <div class="content_info">
                <div class="title">
                    <span><i class="bi bi-clock"></i></span>
                    <span>ម៉ោងសិក្សា</span>
                </div>
                <hr>
                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនព្រឹក ៖ ម៉ោង ៧ : ០០ ដល់ ១២ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនរសៀល ៖ ម៉ោង ១ : ៣០ ដល់ ៥ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនយប់ ៖ ម៉ោង ៥ : ៣០ ដល់ ៨ : ៣០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនថ្ងៃសៅរ៍-អាទិត្យ ៖ សិក្សាពេលព្រឹក និងថ្ងៃ</p>
                </div>
                <hr>
                <div class="btnDetail">
                    <a href="#">ចុចមើលបន្ថែម</a>
                </div>
            </div>

            <div class="content_info">
                <div class="title">
                    <span><i class="bi bi-clock"></i></span>
                    <span>ម៉ោងសិក្សា</span>
                </div>
                <hr>
                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនព្រឹក ៖ ម៉ោង ៧ : ០០ ដល់ ១២ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនរសៀល ៖ ម៉ោង ១ : ៣០ ដល់ ៥ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនយប់ ៖ ម៉ោង ៥ : ៣០ ដល់ ៨ : ៣០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនថ្ងៃសៅរ៍-អាទិត្យ ៖ សិក្សាពេលព្រឹក និងថ្ងៃ</p>
                </div>
                <hr>
                <div class="btnDetail">
                    <a href="#">ចុចមើលបន្ថែម</a>
                </div>
            </div>

            <div class="content_info">
                <div class="title">
                    <span><i class="bi bi-clock"></i></span>
                    <span>ម៉ោងសិក្សា</span>
                </div>
                <hr>
                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនព្រឹក ៖ ម៉ោង ៧ : ០០ ដល់ ១២ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនរសៀល ៖ ម៉ោង ១ : ៣០ ដល់ ៥ : ០០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនយប់ ៖ ម៉ោង ៥ : ៣០ ដល់ ៨ : ៣០</p>
                </div>

                <div class="items-list" style="display: flex;">
                    <span><i class="bi bi-skip-forward"></i></span>
                    <p style="color:#4dabf7;margin:0 5px;">វេនថ្ងៃសៅរ៍-អាទិត្យ ៖ សិក្សាពេលព្រឹក និងថ្ងៃ</p>
                </div>
                <hr>
                <div class="btnDetail">
                    <a href="#">ចុចមើលបន្ថែម</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- typed js -->
<script src="./assets/js/typed.umd.js"></script>
<script src="./assets/js/scripts.js"></script>
<script src="./assets/js/slides-img-scripts.js"></script>