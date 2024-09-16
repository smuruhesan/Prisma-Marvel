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
            <h1>Tools</h1>
            <!-- <p>Your one-stop resource for Prisma Cloud tools and information.</p> -->
            
          </div>
        </div>
      </div>

    </section>

    <section id="faq-2" class="faq-2 section light-background">

      

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
                input:focus, input:active{
                    box-shadow:none !important;
                    border:none !important;
                }
                .accordion-item input{
                    height:40px;
                }
            </style>
        <div class="container" id="srink_list" >
            <div class="row" style="justify-content:center">
                <div class="col-md-10">

                    <!-- Twistlock Debug tool  -->
                    <div class="accordion-item " id="head_1_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button" id="" type="button" data-bs-toggle="collapse" data-bs-target="#col_1" aria-expanded="true" aria-controls="col_1" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a href="https://debug.twistlock.com/" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/tools/debug.png" style="width:50px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">
                                        Twistlock Debug tool
                                        </h3>
                                        <p style="margin:0; width:100%">Download SaaS Compute console logs, DB and Pprof from backend</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_1" type="button" value="View More >>">
                            </div>

                        </button>
                        </h2>
                        
                    </div>

                    <!-- Rocket : Log Parser Tool  -->                    
                    <div class="accordion-item " id="head_2_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_2" aria-expanded="true" aria-controls="col_2" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a href="http://rocket.paloaltonetworks.com/prismaparser/" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/rocket.png" style="width:50px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">Rocket : Prisma Cloud Log Parser tool</h3>
                                        <p style="margin:0; width:100%">Log parse tool.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_2" type="button" value="View More >>">
                            </div>

                        </button>
                        </h2>
                    </div>

                    <!-- Groot  : IS Tool  -->
                    <div class="accordion-item " id="head_3_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_3" aria-expanded="true" aria-controls="col_3" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a href="http://groot.paloaltonetworks.com/" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/groot.png" style="width:50px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">Groot : Intelligence Stream tracker</h3>
                                        <p style="margin:0; width:100%">IS tool.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_3" type="button" value="View More >>">
                            </div>
                        </button>
                        </h2>
                    </div>

                    <!-- Strom :  Agentless tool -->
                    <div class="accordion-item " id="head_4_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_4" aria-expanded="true" aria-controls="col_4" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a  href="http://ag.paloaltonetworks.com:4010/" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/storm.png" style="width:30px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">Storm : Agentless Log Parser</h3>
                                        <p style="margin:0; width:100%">AG tool.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_4" type="button" value="View More >>">
                            </div>
                        </button>
                        </h2>
                    </div>

                    <!-- Drax :  DB tool -->
                    <div class="accordion-item " id="head_5_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_5" aria-expanded="true" aria-controls="col_5" style="">
                            <div style="display:flex; justify-content:space-between; width:100%;  align-items:center">
                                <a href="http://drax.paloaltonetworks.com/drax/" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/drax.png" style="width:25px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">Drax : TwistlockDB UI Tool</h3>
                                        <p style="margin:0; width:100%">Twistlock DB tool.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_5" type="button" value="View More >>">
                            </div>
                        </button>
                        </h2>
                    </div>

                    <!-- Twistlock Dashboard  -->
                    <div class="accordion-item " id="head_6_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_6" aria-expanded="true" aria-controls="col_6" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a href="#url" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/rocket.png" style="width:50px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">Twistlock Dashboard tool</h3>
                                        <p style="margin:0; width:100%">To monitor customer credit consumption and usage metrics.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_6" type="button" value="View More >>">
                            </div>
                        </button>
                        </h2>
                    </div>

                    <!-- CAS Support Tool -->
                    <div class="accordion-item " id="head_7_main">
                        <h2 class="accordion-header" >
                        <button class="accordion-button"  type="button" data-bs-toggle="collapse" data-bs-target="#col_6" aria-expanded="true" aria-controls="col_6" style="">
                            <div style="display:flex; justify-content:space-between; width:100%; align-items:center">
                                <a href="#url" target="_blank" style="display:flex; align-items:center ">
                                
                                    <img src="assets/img/rocket.png" style="width:50px;margin-right:10px; height:auto" alt="">
                                    <div>

                                        <h3 style="margin:0">CAS Support Tool</h3>
                                        <p style="margin:0; width:100%">To view CAS enabled modules, enforcement rules, repository information, and suppression rules, significantly improving troubleshooting capabilities.</p>
                                    </div>
                                </a>
                                <input style="border:none; background:#fff;" onclick="open_slider(this)" id="head_7" type="button" value="View More >>">
                            </div>
                        </button>
                        </h2>
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
            padding-top:20px;
        }

                .close_slide_btn{
                    border:none;
                    background:none;
                    color:#fff;
                    position:absolute;
                    text-align:right;
                    right:20px;
                    font-size:28px;
                    /* width:calc(100% - 50px); */

                }
                .close_slide_btn:focus, .close_slide_btn:active{
                    border:none;
                    box-shadow:none;
                }
        </style>


        <!-- Twistlock Debug Tool - More info -->          
        <div class="container slider_cont" id="head_1_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">

            <div class="">                

                <h3>Twistlock Debug Tool</h3>
                <p>This portal is a resource for downloading console debug logs for our SaaS customers directly by utilizing the Customer ID.</p>

                <h3>How to Fetch Customer ID</h3>
                <p>Customer ID can be retrieved from the "Path to Console". It is the ID that appears after the URL <strong>xxx.twistlock.com/</strong> in the path to the console.</p>

                <p><strong>Path to Console</strong> can be fetched from:</p>
                <ul>
                    <li><strong>Prisma Console:</strong> Navigate to System > Settings > Path to console</li>
                    <li><strong>Support App:</strong> Navigate to Licensing section > More Info > Path to console</li>
                </ul>

                <h3>Steps to Login to the Tool</h3>
                <ul>
                    <li><strong>Step 1:</strong> Access the URL <a href="https://debug.twistlock.com" target="_blank">https://debug.twistlock.com</a></li>
                    <li><strong>Step 2:</strong> Log in using SSO</li>
                    <li><strong>Step 3:</strong> Select the Customer ID option, enter the Customer ID, select the necessary debug info, and download the logs</li>
                </ul>

                <p><img src="/assets/img/tools/view_more/debugtooloptions.png" alt="Path to Console Image" class="img-fluid" width="700" height="450"></p>



            </div>
        </div>

        <!-- Rocket - Log Parser Tool - More info -->      
        <div class="container slider_cont" id="head_2_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>Rocket: Log Parser Tool for Prisma Cloud Compute</h3>
                <h3>About Rocket</h3>
                <p><strong>Rocket</strong>, named after the Marvel character, is a powerful troubleshooting tool designed for <strong>Prisma Cloud Compute (PCC)</strong>. As more customers adopt our cloud solutions, the complexity of troubleshooting increases. Rocket simplifies this process by analyzing data patterns, helping TAC engineers save valuable time and speed up problem resolution for our customers and partners.</p>

                <h3>Key Benefits of Rocket</h3>
                <ul>
                    <li><strong>Intuitive Log Reader:</strong> Easily readable logs with customizable filters, making log analysis quicker and more efficient.</li>
                    <li><strong>Consolidated View:</strong> All necessary information is available in one place, simplifying the troubleshooting process.</li>
                    <li><strong>Predefined Filters:</strong> Guides engineers through the sequence of events and provides recommended next steps for common issues.</li>
                    <li><strong>Graphical Visualizations:</strong> Offers charts that help visualize system performance issues like high CPU usage, memory overload, and connection failures, providing both efficiency and clarity.</li>
                    <li><strong>Ongoing Development:</strong> Additional features are continuously being developed, further enhancing Rocket's capabilities.</li>
                </ul>

                <h3>How to Access Rocket</h3>
                <p>There are two ways to access the Rocket tool:</p>
                <ul>
                    <li><strong>Through Vision:</strong> Integrated with SFDC, GCS, and Slack, Vision offers a seamless log uploading experience and is available to the TAC and Focused Services Team.</li>
                    <li><strong>Direct Access to Rocket:</strong> An alternative method for accessing Rocket, available to all PANW employees through the GlobalProtect (GP) connection.</li>
                </ul>

                <h3>Demo</h3>
                <p><strong>Here is the Demo of the Rocket Tool:</strong></p>
                    <!-- <iframe src="https://drive.google.com/file/d/1BYoXA7SSqf8SLr5KpPRBHAs1NR10eX7m/preview" 
                            width="700" height="450" ß
                            allow="autoplay; fullscreen" 
                            frameborder="0" 
                            allowfullscreen
                            loading="lazy">
                    </iframe> -->
            </div>
        </div>

        <!-- Groot - Intelligence Stream Tool - More info -->  
        <div class="container slider_cont" id="head_3_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>Groot: Intelligence Stream Tool</h3>
                <h3>About Groot</h3>
                <p><strong>Groot</strong>, named after the Marvel character from Guardians of the Galaxy, is an Intelligence Stream (IS) tool designed to help Prisma Cloud engineers easily track and manage intelligence updates. Inspired by other tools like <strong>Rocket</strong>, Groot continues the theme of using Marvel characters to represent powerful solutions within our platform.</p>
                <p>With intelligence updates happening frequently and automatically, Groot addresses common questions such as, "When was this CVE added?" or "What changed regarding a specific CVE on a certain date?"</p>

                <h3>Key Capabilities of Groot</h3>
                <ul>
                    <li><strong>Track Changes:</strong> Monitor any changes made to the Intelligence Stream since January 1, 2023, including rules that have been removed.</li>
                    <li><strong>File Support:</strong> Supports a variety of file types, including CVE, MD5, domain, and IP data downloaded from the Intelligence Stream.</li>
                    <li><strong>User-Friendly Interface:</strong> Offers a simple and intuitive interface for easy searching and data retrieval, making it accessible for engineers at all levels.</li>
                </ul>

                <h3>Files</h3>
                <ul>
                    <li><strong></strong> Monitor any changes made to the Intelligence Stream since January 1, 2023, including rules that have been removed.</li>
                    <li><strong>File Support:</strong> Supports a variety of file types, including CVE, MD5, domain, and IP data downloaded from the Intelligence Stream.</li>
                    <li><strong>User-Friendly Interface:</strong> Offers a simple and intuitive interface for easy searching and data retrieval, making it accessible for engineers at all levels.</li>
                </ul>
                <p>Here is a quick demo of the Groot Tool:</p>
                <!-- <iframe src="https://drive.google.com/file/d/1HY5Jt_hRPGv86DiAayY7yP74B7z6c-_x/preview" 
                        width="700" height="450" 
                        allow="autoplay; fullscreen" 
                        frameborder="0" 
                        allowfullscreen
                        loading="lazy">
                </iframe> -->

            </div>
        </div>

        <!-- Storm: Agentless Log Parser Tool - More info -->  
        <div class="container slider_cont" id="head_4_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>Storm: Agentless Log Parser Tool</h3>
                <h3>URL : <a href="http://ag.paloaltonetworks.com:4010/" target="_blank"><strong>http://ag.paloaltonetworks.com:4010/</strong></a></h3>
                <h3>About</h3>
                <p>The Storm - Agentless Tool is a powerful solution designed for efficient agentless log analysis, significantly reducing the time support engineers spend on manual log parsing for agentless issue. Like other tools, <strong>Storm</strong> is named after a Marvel character, continuing the theme across our troubleshooting tools.</p>


                <h3>Key Benefits</h3>
                <ul>
                    <li><strong>Rapid Log Analysis:</strong> Cuts down log analysis time from up to an hour to just a few minutes, providing quick insights and reducing response times for support engineers.</li>
                    <li><strong>User-Friendly Interface:</strong> Displays logs in a clear, color-coded format, allowing engineers to easily identify key events and anomalies across accounts and regions.</li>
                    <li><strong>Comprehensive Search Functionality:</strong> Offers advanced search options by Account, VM, Scanner, or Log ID, streamlining the process of locating specific logs.</li>
                    <li><strong>Agentless Scan Summary Report:</strong> Delivers a detailed scan summary, including host information, file system types, distribution, and scan results, all in one place.</li>
                    <li><strong>Seamless Scan Navigation:</strong> Allows engineers to switch between different scan IDs directly from the Log Viewer, ensuring quick access to the relevant data.</li>
                    <li><strong>Advanced Features:</strong> Includes the ability to export reports, reference sample logs, and provide detailed console information such as Path to Console and SaaS data.</li>
                </ul>

                <h3>Problems This Tool Addresses</h3>
                <ul>
                    <li><strong>Lengthy Manual Log Review:</strong> Previously, engineers had to spend significant time manually analyzing logs. This tool automates and speeds up the process, allowing them to focus on resolution rather than log parsing.</li>
                    <li><strong>Complex Error Tracking:</strong> With predefined filters and color-coded logs, engineers can easily trace key events, errors, and scan flows, minimizing guesswork and manual effort.</li>
                    <li><strong>Inconsistent Reporting:</strong> The tool generates consistent, per-scan reports with detailed scanner data, making it easy for engineers to document and share insights in platforms like PCSUP or SFDC.</li>
                    <li><strong>Difficult Data Access:</strong> Engineers can now quickly search for relevant logs and download reports, improving collaboration and case handling efficiency.</li>
                </ul>

                <h3>Files</h3>
                <ul>
                    <li><a href="https://docs.google.com/presentation/d/1HboFxKB6aPxREktr3EeaZwfGQ51l3lkuMsSE9m4QNc4/edit#slide=id.g276b27bfd70_0_336" target="_blank"><strong>Agentless Log Larser Tool Presentation</strong></a></li>
                    <li><a href="https://drive.google.com/drive/folders/12AG0XuSAmwVOo0g28lMLHBFMVLDDsJOr?usp=drive_link" target="_blank"><strong>Demos</strong></a></li>
                </ul>

                <h3>Demo 1 </h3>
                <iframe src="https://drive.google.com/file/d/1j2bXF1jJl-yGWn8PehDHhBxiaSXHQnPm/preview" 
                        width="700" height="450" 
                        allow="autoplay; fullscreen" 
                        frameborder="0" 
                        allowfullscreen
                        loading="lazy">
                </iframe>
                <h3>Demo 2 </h3>
                <iframe src="https://drive.google.com/file/d/1a1z1GuafUtfqKDJTSkvjEJxS503dSv4L/preview" 
                        width="700" height="450" 
                        allow="autoplay; fullscreen" 
                        frameborder="0" 
                        allowfullscreen
                        loading="lazy">
                </iframe>
                <p><a href="https://drive.google.com/drive/folders/12AG0XuSAmwVOo0g28lMLHBFMVLDDsJOr?usp=drive_link" target="_blank"><strong>Recording Files</strong></a></p>


            </div>
        </div>

        <!-- Drax : DB Tool  - More info --> 
        <div class="container slider_cont" id="head_5_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>Drax: DB Tool</h3>
                <p>In many scenarios like troubleshooting vulnerabilities, or we need to read settings from customer's Twistlock console, it was necessary to ask customers to provide screenshots and they may not give us the screenshots as we requested. Although the same info can be retrieved from a DB backup, it is still quite a challenge for every TAC member to understand how to build, import, and access the mongo DB.
                </p>
                <p>To overcome this challenge we came up with a new Tool ! Drax (which named from Guardian of Galaxy, same Marvel Hero Series of another tool Rocket and Groot)</p>
                <p></p>
                <p>Drax enables every Prisma Cloud engineers with the below abilities:</p>
                <p></p>
                <p>1. Import the DB backup collected from all of known methods </p>
                <p>2. Search and read the data easily from the DB backup via a web page</p>
                <p>3. Export as CSV with whole table or selected data</p>
                <p> <a href="https://docs.google.com/presentation/d/1-3aV986RH5Mov2ObQblmGVW9qyenkbQByKJwNU6M2Yc/edit#slide=id.p" target="_blank">Drax Presentation</a> </p>
                <p>Here is a quick demo to the tool!!</p>

                <!-- <iframe src="https://drive.google.com/file/d/1MqmMl1ta2BAZc85ToVGCZF14OLxHraaT/preview" 
                        width="700" height="450" 
                        allow="autoplay; fullscreen" 
                        frameborder="0" 
                        allowfullscreen
                        loading="lazy">
                </iframe> -->
            </div>
        </div>        

        <!-- Twistlock Dashboard tool  - More info --> 
        <div class="container slider_cont" id="head_6_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>Dashboard: Twistlock Portal for TAC</h3>
                <h3>About</h3>
                <p>While the <strong>dashboard.twistlock.com</strong> portal primarily caters to our CS (Customer Success) team for monitoring customer credit consumption and usage metrics, I would like to highlight its value for the TAC as well.</p>
                <p>This tool provides valuable information that aids in troubleshooting customer issues, including:</p>

                <h3>Key Metrics</h3>
                <ul>
                    <li><strong>Credits Consumption:</strong> Monitor customer credit usage to better understand consumption patterns.</li>
                    <li><strong>Defenders Count by Type:</strong> Track the total number of defenders connected, broken down by type.</li>
                    <li><strong>Registry Configurations by Type and Total Images Scanned:</strong> View the configuration of registries and the total number of images scanned.</li>
                    <li><strong>Total Scanned Containers:</strong> Keep track of all containers that have been scanned.</li>
                    <li><strong>Cloud Account Counts:</strong> View the total number of cloud accounts connected to the system.</li>
                    <li><strong>Total Runtime Policy Rules Configured:</strong> See how many runtime policy rules are in place.</li>
                    <li><strong>Total Custom Rules:</strong> Check the number of custom rules that have been created.</li>
                    <li><strong>Total Runtime Audits:</strong> View the total number of runtime audits conducted.</li>
                    <li><strong>Total Incidents Count:</strong> Keep track of all reported incidents.</li>
                    <li><strong>Total Scanned Functions:</strong> Track the total number of functions that have been scanned.</li>
                    <li><strong>Agentless Stats:</strong> View statistics for agentless scans.</li>
                </ul>

                <h3>Use for TAC</h3>
                <p>Leveraging these metrics allows us to track the total number of registry images scanned between specific timestamps, identify the number of defenders connected on a particular date, and much more. This data can be invaluable for troubleshooting customer issues and ensuring a more efficient support experience.</p>

                
            </div>
        </div>

        <!-- CAS Support tool  - More info --> 
        <div class="container slider_cont" id="head_7_col">
            <input type="button" value="x" class="close_slide_btn" onclick="closed_slider_x()">
            <div class="">
                <h3>CAS Support Tool</h3>
                <h3>URL : <a href="https://jenkins.bridgecrew.cloud/view/Operations/job/customer-support-info/build?delay=0sec" target="_blank"><strong>CAS Support Tool - Jenkins</strong></a></h3>
                <h3>Refer: <a href="https://confluence-dc.paloaltonetworks.com/pages/viewpage.action?spaceKey=CASCS&title=How+to+use+the+Support+Tool" target="_blank"><strong>How to use the Support Tool</strong></a></h3>
                <p></p>
                
            </div>
        </div>    


        <style>
            .slider_cont{
                transition:1s;
                position:fixed;
                right:-100%;
                background:url(assets/img/banner.svg),linear-gradient(180deg,#02212f 50%,#00667e 99.9%);
                bottom:0;
                height:80vh;
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
                height:80vh;
                width:60%;
                padding-bottom:250px;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
            .faq-2{
                position:relative;
                height:80vh;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
        </style>
      
    </section>

  </main>

  
  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <div id="preloader"></div>
          <?php include("script.php"); ?>
          <script>
            function open_slider(ele){
                // alert(ele.id);
                // alert(ele.classList);
                if(ele.classList.contains('active')){
                    console.log("close_same");
                    $(".slider_cont").removeClass("active");
                    $("input").removeClass("active");
                    $("#"+ele.id).val("View >>");
                    $(".accordion-button").removeClass("active");
                    $("#"+ele.id).removeClass("active");
                    $("#faq-2").css("width","100%");
                    $(".accordion-item").css("background","#fff");

                    $(".accordion-item h3").css("color","#37517e");
                    $(".accordion-item p").css("color","#37517e");
                    $("#"+ele.id+"_col").removeClass("active");
                    $("#faq-2").removeClass("active");

                }
                else{
                    console.log("open_next");

                    $(".accordion-item").css("background","#fff");
                    $(".accordion-item h3").css("color","#37517e");
                    $(".accordion-item p").css("color","#37517e");
                    $("#faq-2").removeClass("active");
                    $(".accordion-item input").val("View >>");

                    $(".slider_cont").removeClass("active");
                    $(".accordion-button").removeClass("active");
                    $("input").removeClass("active");
                    $("#"+ele.id+"_col").addClass("active");
                    $("#"+ele.id+"_main").css("background","linear-gradient(180deg,#02212f 50%,#00667e 99.9%)");
                    $("#"+ele.id+"_main h3").css("color","#fff");
                    $("#"+ele.id+"_main p").css("color","#fff");
                    $("#"+ele.id).addClass("active");
                    $("#faq-2").css("width","40%");
                    $("#faq-2").addClass("active");
                    $("#"+ele.id).val("<< Close");


                }
            }
            function closed_slider_x(){
            
                    $(".slider_cont").removeClass("active");
                    $(".accordion-button").removeClass("active");
                    $(".accordion-item input").val("View >>");
                    $("input").removeClass("active");
                    // $("#"+ele.id).removeClass("active");
                    $("#faq-2").css("width","100%");
                    $(".accordion-item").css("background","#fff");

                    $(".accordion-item h3").css("color","#37517e");
                    $(".accordion-item p").css("color","#37517e");
                    // $("#"+ele.id+"_col").removeClass("active");
                    $("#faq-2").removeClass("active");   
            }
          </script>
</body>

</html>