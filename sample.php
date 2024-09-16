<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body class="index-page">
<?php include("nav.php"); ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="min-height:20vh;">

      <div class="container">
        <div class="row gy-4" style="justify-content:center; align-items:center;">
          <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center" data-aos="zoom-out">
            <h1>Sample</h1>
            <!-- <p>Your one-stop resource for Prisma Cloud tools and information.</p> -->
            
          </div>
        </div>
      </div>

    </section>

    <section id="faq-2" class="faq-2 section light-background">

      
      <!-- <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div> -->

            <style>
            body{
                background:#f5f6f8;
            }
                .faq-2{
                    transition:1s;
                    width:100%;
                }
                .faq-2.active{
                    width:40%;
                    transition:1s;
                }
                .accordion-item{
                    border:none;
                    padding:20px;
                    margin:20px 0;
                    background:#fff;
                }
                .hero{
                    padding:60px 0 30px 0;
                }
                .accordion-button{
                    gap:10px;
                }
                .accordion-button:focus, .accordion-button:active{
                    border:none !important;
                    background:transparent !important;
                    /* padding:0; */
                    box-shadow:none !important;
                }
                .accordion-button h3{
                    font-weight: 600;
                    font-size: 20px;
                    line-height: 24px;
                    /* margin: 0 30px 0 32px; */
                    transition: 0.3s;
                    cursor: pointer;
                }
                .accordion-button:not(.collapsed){
                    background:transparent;
                    border:none;
                    box-shadow:none;
                }
                .accordion-button{
                    transition:.7s;
                }
                .accordion-button:hover h3{
                    color:#47b2e4;
                }
                .tab_cont .nav{
                    justify-content:center;
                    border:none;
                    border-bottom:1px solid #00667D;
                    padding-bottom:10px;
                }
                .tab_cont .nav-link{
                    background:transparent;
                    border:none;
                    color:#00667e;
                }
                .tab_cont .nav-link.active{
                    color:#fff;
                    background:#00667e;
                    border-radius:4px;
                }
                .tab_inner{
                    padding:40px 0;
                    color:#00667D;
                }
                .tab_inner a{
                    color:#00667D;
                    transition:.7s;

                }
                .tab_inner a:hover{
                    color:#02212f;
                }
            </style>
        <div class="container tab_cont" id="srink_list" >
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-cspm-tab" data-bs-toggle="tab" data-bs-target="#nav-cspm" type="button" role="tab" aria-controls="nav-cspm" aria-selected="true">CSPM</button>
                    <button class="nav-link" id="nav-cwp-tab" data-bs-toggle="tab" data-bs-target="#nav-cwp" type="button" role="tab" aria-controls="nav-cwp" aria-selected="false">CWP</button>
                    <button class="nav-link" id="nav-cs-tab" data-bs-toggle="tab" data-bs-target="#nav-cs" type="button" role="tab" aria-controls="nav-cs" aria-selected="false">CAS</button>
                    <button class="nav-link" id="nav-dig-tab" data-bs-toggle="tab" data-bs-target="#nav-dig" type="button" role="tab" aria-controls="nav-dig" aria-selected="false">Ciber Security</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-cspm" role="tabpanel" aria-labelledby="nav-cspm-tab">

                    <div class="tab_inner">
                    
                        <ul>

                            <li><a href="" target="_blank">CSPM Architecture Overview</a></li>
                            <li><a href="" target="_blank">CSPM Escalation Template (TAC to CE)</a></li>
                            <li><a href="" target="_blank">CSPM escalation template (Duplicate)</a></li>
                            <li><a href="" target="_blank">CE Knowledge Base</a></li>
                            <li><a href="" target="_blank">Play-books</a></li>
                            <li><a href="" target="_blank">Flow-log Run-book</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>
                            <li><a href="" target="_blank">Release tracker</a></li>
                            <li><a href="" target="_blank">Support-App</a></li>
                            <li><a href="" target="_blank">TAC/CE Enablement session</a></li>
                            <li><a href="" target="_blank">MPL Escalation template (Market Place)</a></li>

                        </ul>
                        <h4 style="margin-top:15px">Darwin Project</h4>
                        <ul>
                            <li><a href="" target="_blank">Darwin Project Demos</a></li>
                            <li><a href="" target="_blank">Darwin FAQ's</a></li>
                            

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cwp" role="tabpanel" aria-labelledby="nav-cwp-tab">
                    <div class="tab_inner">
                        
                        <ul>
                            <li><a href="" target="_blank">lApplication Container Security Guideink</a></li>
                            <li><a href="" target="_blank">Playbooks</a></li>
                            <li><a href="" target="_blank">linCookbook (Need Github Access)k</a></li>
                            <li><a href="" target="_blank">Sprint and Release Tracker</a></li>
                            <li><a href="" target="_blank">Bugs & Sprints (ETA for Fix)</a></li>
                            <li><a href="" target="_blank">CWP Specific Escalation process (PCSUP)</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>
                            

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cs" role="tabpanel" aria-labelledby="nav-cs-tab">
                
                    <div class="tab_inner">
                        <ul>
                            <li><a href="" target="_blank">Bridecrew Workflow</a></li>
                            <li><a href="" target="_blank">Code Security Troubleshooting</a></li>
                            <li><a href="" target="_blank">TAC Run-book</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dig" role="tabpanel" aria-labelledby="nav-dig-tab">
                    <div class="tab_inner">
                    
                        <ul>
                            <li><a href="" target="_blank">Cider Beta (Early Access ) - Playbook</a></li>
                            <li><a href="" target="_blank">linCAS Team  (Engineering Team)k</a></li>
                            <li><a href="" target="_blank">CI/CD security module - Beta training recording (Passcode: h*!Tk8fpjw)</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                        </ul>
                        <h4 style="margin-top:15px">Google Docs</h4>
                        <ul>
                            <li><a href="" target="_blank">Cider Google Drive </a></li>
                            <li><a href="" target="_blank">CAS Escalation Process</a></li>
                            <li><a href="" target="_blank">Prisma Cloud CAS Escalation Template  - to be used as guidance to engage CAS development team which is developed in collaboration with the Cider and Code Security (Bridgecrew) team.</a></li>
                            <li><a href="" target="_blank">CAS team domains and responsibilities </a></li>
                            <li><a href="" target="_blank">CAS Support Troubleshooting</a></li>
                            <li><a href="" target="_blank">CAS How to Articles</a></li>
                            <li><a href="" target="_blank">Application Security Beta User Guide</a></li>

                        </ul>
                        <h4 style="margin-top:15px">NPI Trainings</h4>
                        <ul>
                            <li><a href="" target="_blank">NPI Slides / Presentation</a></li>
                            <li><a href="" target="_blank">NPI Recording (Passcode :psHticN^2y)</a></li>
                            <li><a href="" target="_blank">Prisma Cloud: CI/CD security [Cider] (Darwin GTM)</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <style>
        .slider_cont{
            color:#fff;
            padding:20px;
            
        }
        .slider_cont h3{
            color:#fff;
            font-weight:700;
        }
        </style>
        <style>
            .slider_cont{
                transition:1s;
                position:fixed;
                right:-100%;
                background:url(assets/img/banner.svg),linear-gradient(180deg,#02212f 50%,#00667e 99.9%);
                bottom:0;
                height:70vh;
                width:60%;
                padding-bottom:250px;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
            .slider_cont.active{
                position:fixed;
                transition:1s;
                right:0;
                background:linear-gradient(180deg,#00667e 50%,#02212f 99.9%);
                background-size:cover;
                background-position:center;
                /* background:red; */
                bottom:0;
                height:70vh;
                width:60%;
                padding-bottom:250px;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
            .faq-2{
                position:relative;
                height:70vh;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
        </style>
      
    </section>

  </main>

  <!--<footer id="footer" class="footer">

    
    
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Prisma Cloud Marvel</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        
      </div>
    </div>

  </footer>-->

  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <div id="preloader"></div>
          <?php include("script.php"); ?>
          <script>
            
          </script>
</body>

</html>