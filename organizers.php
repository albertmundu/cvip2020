<?php 

function display_cards($arr){
     foreach($arr as $items){
            echo "<div class=\"card\" style=\"width: 15rem; margin: 5px;\">";
                echo "<img height=\"250px\" class=\"card-img-top\" src=\"images/cvip/committee/".$items[1]."\" alt=\"\">";
                echo "<div class=\"card-body\">";
                    echo "<h5 class=\"card-title\">".$items[0]."</h5>";
                    echo "<p class=\"card-text\">".$items[2]."</p>";
                echo "</div>";
            echo "</div>";
    }
}



function reviewers(){
    $fp1 = fopen('reviewer1.csv', "r");
    $fp2 = fopen('reviewer2.csv', "r");
    // $arr2 = fgetcsv($list2);

    $arr1 = array();
    $arr2 = array();
    while(!feof($fp1) && ($line = fgetcsv($fp1)) !== false) {
        $arr1[] = $line;
    }
    while(!feof($fp2) && ($line = fgetcsv($fp2)) !== false) {
        $arr2[] = $line;
    }

    foreach($arr1 as $item){
        echo "<li class=\"col-lg-6 float-left\"><strong>".ucwords(strtolower($item[0]))."</strong>, {$item[1]}</li>";
    }
   foreach($arr2 as $item){
         echo "<li class=\"col-lg-6 float-left\"><strong>".ucwords(strtolower($item[0]))."</strong>, {$item[1]}</li>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>CVIP 2020</title>
    <?php include("layout/meta.php");?>
</head>

<body>
    <?php include("layout/nav.php");?>

    <!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/cvip/l03.jpg');background-size: cover;" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
<div class="col-md-9 ftco-animate pb-5">
<h1 class="mb-3 bread" style="color:white">Committee</h1>
<p class="breadcrumbs"><span class="mr-2"><a style="color:white" href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span style="color:white">Committee <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section> -->



    <section class="ftco-section" style="padding:10px; margin-top: 140px;">
        <!-- <div class="overlay"></div> -->
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-12 heading-section text-center ftco-animate text-uppercase">
                    <h2>CONFERENCE COMMITTEE</h2>
                </div>


            </div>

            <div class="row ftco-animate">
                <h1 class="col-12 text-center border-bottom">Patron</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: auto;">
                    <img class="card-img-top" src="images/cvip/committee/bidyut.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Bidyut Baran Chaudhuri</h5>
                        <p class="card-text">Indian Statistical Institute</p>
                    </div>
                </div>
            </div>

            <div class="row ftco-animate">
                <h1 class="col-12 text-center border-bottom">General Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: auto;">
                    <img class="card-img-top" src="images/cvip/committee/naghabushan.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. P. Nagabhushan</h5>
                        <p class="card-text">Director, IIIT Allahabad</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">General Co-Chair</h1>
                <hr>
                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/shekhar" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Shekhar Verma</h5>
                        <p class="card-text">IIIT Allahabad</p>
                    </div>
                </div>

                <div class="card" style="width: 15rem; margin: 5px;">
                    <img class="card-img-top" src="images/cvip/committee/bala.jpeg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Prof. Balasubramanian Raman</h5>
                        <p class="card-text">IIT Roorkee</p>
                    </div>
                </div>

            </div>

            <?php 
            $conf_chairs = array(["Dr. Satish K. Singh","satish.png","IIIT Allahabad"],["Dr. Vrijendra Singh","vrijendra.jpg","IIIT Allahabad"],["Dr. Sanjeev Kumar","sanjeev.jpg","IIT Roorkee"],["Dr. Partha Pratim Roy","partha.jpg","IIT Roorkee"]);
            $conf_convrs = array(["Dr. Mohammed Javed","javed.jpg","IIIT Allahabad"],["Dr. Pritee Khanna","priteekhanna.jpg","IIIT DMJ"],["Dr. K.P Singh","kp.jpg","IIIT Allahabad"],["Dr. Shiv Ram Dubey", "srd.jpg", "IIIT Sri City"]);

            $local_chairs = array(["Prof. Shirshu Varma","shirshu.jpg","IIIT Allahabad"]);
            $inter_advisory_com = array(
                                    ["Prof. K. C. Gowda","gowda.png","Former VC, Kuvempu University"],
                                    ["Prof. Paula Brito","paula.jpg"," University of Porto, Portugal"],
                                    ["Prof. B.N. Chatterji","bn.jpeg","IIT Kharagpur (Past Affiliation)"],
                                    ["Prof. G.C Nandi","gc.jpg","IIIT Allahabad"],
                                    ["Prof.Sushmita Mitra","sm.jpg","ISI Kolkata"],
                                    ["Prof. Gaurav Sharma","gaurav.jpeg","University of Rochester"],
                                    ["Prof.  Mohan  S  Kankanhalli","mohan.jpeg","National University of Singapore, Singapore"],
                                    ["Prof. Jharna Majumdar","jharna.jpeg","Nitte Meenakshi Institute of Technology"],
                                    ["Dr. P.V VenkitaKrishnan","venkiti.png","Director CPBO, ISRO Bangalore"],
                                    ["Prof. SN Singh","snsingh.jpeg","IIT Kanpur"],
                                    ["Dr. JV Thomas","jvthomas.png","Associate Director, STA ISRO Banglore"],
                                    ["Prof. N V Subba Reddy","subba.jpg","MIT Manipal"],
                                    ["Prof. KR Ramakrishnan","krr.png","IISC Bangalore"],
                                    ["Prof. Umapada Pal","umapada.jpeg","ISI Kolkata"],
                                    ["Prof. B. M. Mehtre","mehtre.jpg","IDRBT Hyderabad"],
                                    ["Dr. Pradeep Kumar","pradeep.jpeg","CEO, Amphisoft"],
                                    ["Prof. D.S Guru","dsguru.jpeg","University of Mysore"],
                                    ["Prof. U.S Tiwari","ust.jpeg","IIIT Allahabad"],
                                    ["Prof. Anupam Agrawal","anupam.jpg","IIIT Allahabad"],
                                    ["Prof. O.P Vyas","op.jpeg","IIIT Allahabad"],
                                    ["Prof. Jonathan Wu","Jonathan.jpg","University of Windsor, Canada"],
                                    ["Prof. Xiaoyi Jiang","jiang.jpg","University of Münster,Germany"],
                                    ["Prof. Chirag N. Paunwala","chirag.jpeg","SCET, Surat"],
                                    ["Prof. Suman Mitra","suman.jpg","DA-IICT Gandhinagar"],
                                    ["Prof. Sanjay Kumar Singh","sksingh.jpg","IIT BHU"],
                                    ["Prof. Suneeta Agarwal","sa.jpg","MNNIT Allahabad"],
                                    ["Prof. Ananda Shankar Chowdhury","ananda.jpg","Jadavpur University"],
                                    ["Prof. Aparajita Ojha","aojha.jpg","IIIT Jabalpur"],
                                    ["Prof. Sushmita Gosh","656.jpg","Jadavpur University"],
                                    ["Dr. Debashis Sen","deb.jpg","IIT Kharagpur"],
                                    ["Prof. Daniel P. Lopresti","DPL3.jpg","Lehigh University, USA"],
                                    ["Prof. Gian Luca Foresti","foresti_bn.jpg","University of Udine, Italy"],
                                    ["Prof. Josep Lladós","josep.png","Universitat Autònoma de Barcelona, Spain"],
                                    ["Prof. Massimo Tistarelli","massimo.png","University of Sassari, Italy"],
                                    ["Prof. Sudeep Sarkar","sarkar.jpg","University of South florida, USA"],
                                    ["Dr. B. H. Shekhar","bh.jpg","Mangalore University"],
                                    ["Dr. Watanabe Osamu","osamu.jpeg","Takushoku University, Japan"],
                                    ["Dr. Thinagaran Perumal","thinagaran.jpg","FSKTM, Malaysia"],
                                    ["Dr. Sahana Gowda","shahana.png","BNMIT, Bengaluru"],
                                    ["Dr. Ashish Khare","ashish.jpeg","University of Allahabad"],
                                    ["Dr. Kiran Raja","kiran.jfif","NTNU Norway"],
                                    ["Dr. Alireza Alaei","alaei.jfif","Southern Cross University, Australia"],
                                    ["Dr. Gaurav Gupta","gupta.jpg","Wenzhou-Kean University, China"],
                                    ["Dr. Prabhu Natarajan","prabhu.jfif","DigiPen Institute of Technology Singapore"],
                                    ["Dr. Guoqiang Zhong","zhong.jfif","Ocean University of China, China"],
                                    ["Dr. Juan Tapia Farias","juan.jfif","Doctorado Ing. Eléctrica Universidad de Chile"],
                                    ["Dr. Sule Yildirim Yayilgan","sule.jpg"," Norwegian University of Science and Technology(NTNU)"],
                                    ["Dr. Ankit Chaudhary","ankit.jfif","The University of Missouri – St. Louis, USA"],
                                    ["Dr. Ajita Rattani","rattani.jpg","Wichita State University, USA"],
                                    ["Dr. Emanuela Marasco","emanuela.jfif","George Mason University USA"],
                                    ["Dr. Sebastiano Battiato","sebastiano.jpg","Università di Catania - Dipartimento di Matematica ed Informatica, Italy"],
                                    ["Prof. Bir Bhanu","bir.png","University of California, Riverside, USA"],
                                    ["Dr. M. Tanveer","tanveer.png","IIT Indore"],
                                    ["Dr. Puneet Gupta","puneet.jpg","IIT Indore"],
                                    ["Dr. Munesh C. Trivedi","munesh.jpg","NIT Agartala"],
                                    ["Dr. Surya Prakash","sp.jpg","IIT Indore"],
                                    ["Prof. Rajeev Srivastava","rajeev.png","IIT BHU"],
                                    ["Dr. Somnath Dey","somnath.webp","IIT Indore"],
                                    ["Prof. Michal Haindl","michal.jpg","Czech Academy of Sciences"],
                                    ["Prof. Manoj K. Arora","manojkarora.jpg","BML Munjal University"],
                                    ["Dr. Sharad Sinha","sharad.jpg","IIT Goa"],
                                    ["Dr. Bunil Kumar Balabantaray","bunil.jpg","NIT Meghalaya"],
                                    ["Prof. Wei-Ta Chu","chu.jpg","National Chung Cheng University, Chiayi, Taiwan"],
                                    ["Prof. Ramakrishnan Ganesan Angarai","rama.png","IISc Bangalore"],
                                    ["Dr. Rajeev Jaiswal","rajeevisro.jpg","Deputy Director, EDPO, ISRO HQ (Bangalore)"]
                                );

                                sort($inter_advisory_com);
        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Conference Chairs</h1>
                <hr>
                <?php display_cards($conf_chairs);?>
            </div>

            <!-- Conference Convener -->
            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Conference Conveners</h1>
                <hr>
                <?php display_cards($conf_convrs);?>

            </div>

            <!-- Local Organizing Chair -->

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Local Organizing Chair</h1>
                <hr>
                <?php display_cards($local_chairs);?>


            </div>

            <!-- International Advisory Committee -->
            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">International Advisory and Programme Committee</h1>
                <hr>
                <?php display_cards($inter_advisory_com);?>

            </div>

            <!-- Advisory or Programme Committee -->
            <?php 
            $advisory = array(
                            ["Dr. B. H. Shekhar","bh.jpg","Mangalore University"],
                            ["Dr. Watanabe Osamu","osamu.jpeg","Takushoku University, Japan"],
                            ["Dr. Thinagaran Perumal","thinagaran.jpg","FSKTM, Malaysia"],
                            ["Dr. Sahana Gowda","shahana.png","BNMIT, Bengaluru"],
                            ["Dr. Ashish Khare","ashish.jpeg","University of Allahabad"],
                            ["Dr. Kiran Raja","kiran.jfif","Norwegian Biometrics Laboratory"],
                            ["Dr. Alireza Alaei","alaei.jfif","Southern Cross University, Australia"],
                            ["Dr. Gaurav Gupta","gupta.jpg","Wenzhou-Kean University, China"],
                            ["Dr. Prabhu Natarajan","prabhu.jfif","DigiPen Institute of Technology Singapore"],
                            ["Dr. Guoqiang Zhong","zhong.jfif","Ocean University of China, China"],
                            ["Dr. Sharad Sinha","sharad.jpg","IIT Goa"],
                            ["Dr. Bunil Kumar Balabantaray","bunil.jpg","NIT Meghalaya"]
                            );
        ?>

            <!-- <div class="row justify-content-center ftco-animate">
            <h1 class="col-12 text-center border-bottom">Advisory or Programme Committee</h1>
            <hr>
            <?php #isplay_cards($advisory);?>

        </div> -->

            <!-- Publicity Chair -->
            <?php 
        $pub_chair = array(["Dr. Subrahmanyam Murala","murala.jpg","IIT Ropar"],
                    ["Dr. Shiv Ram Dubey","srd.jpg","IIIT Sri city"],
                    ["Dr. Ashwini K","ashwini.jpg","GAT Banglore"]
                    );

        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Publicity Chair</h1>
                <hr>
                <?php display_cards($pub_chair);?>

            </div>

            <!-- Sponsorship Chair -->
            <?php 
            $spons = array(["Dr. Partha Pratim Roy","partha.jpg","IIT Roorkee"]);
        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Sponsorship Chair</h1>
                <hr>
                <?php display_cards($spons);?>

            </div>

            <!-- PhD Colloquium Chair -->
            <?php 
            $phd = array(["Prof. Anand Singh Jalal","anandsingh.jpg","GLA University, Mathura"],["Dr Triloki Pant","tpant.jpg","IIIT Allahabad"],["Dr. Soumendu Chakraborty","somendu.jpg","IIIT Lucknow"]);
        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">PhD Colloquium Chair</h1>
                <hr>
                <?php display_cards($phd);?>

            </div>

            <!-- Technical Programme Chair -->
            <?php 
            $tech = array(["Dr. Sonali Agarwal","sonali.jpg","IIIT Allahabad"],["Dr. Subrahmanyam Murala","murala.jpg","IIT Ropar"], ["Dr. Neeru Narang","neeru.png", "AI Research Scientist, Accenture, CA"]);

        ?>

            <div class="row justify-content-center ftco-animate">
                <h1 class="col-12 text-center border-bottom">Technical Programme Chair</h1>
                <hr>
                <?php display_cards($tech);?>

                <h4 class="col-12 text-center border-bottom">Technical Programme Committee</h4>
                <hr>
                <ol class="col-lg-12">
                    <?php reviewers();?>
                </ol>
            </div>



        </div>

    </section>
    <?php include("layout/footer.php");?>