<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{URLROOT}/img/logo.png">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/recruitment.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">
    <title>SSIT | Recruitment</title>
</head>
<body>   
    {include file="../template/includes/header.tpl"} 
    {include file="../template/includes/header2.tpl"}                        
    <div class="recruitment container">
        <h1 class="title">Staff Recruitment</h1>
        <div class="form">
            <p>Download Application Form <a href="{URLROOT}/document/applicationform-SSIT.docx"><button>click here</button></a> </p>
        </div>
        <h1>Shree Swaminarayan Institute of Technology (Degree-Engineering)</h1>
        <table>
            <thead>
                <tr>
                    <th>Post</th>                
                    <th>Civil</th>                
                    <th>Computer/IT*</th>                
                    <th>Mechanical</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Professor</td>                
                    <td>1</td>                
                    <td>2</td>                
                    <td>1</td>                
                </tr>
                <tr>
                    <td>Associate Professor</td>                
                    <td>2</td>                
                    <td>4</td>                
                    <td>2</td>                
                </tr>
                <tr>
                    <td colspan="4" class="last-child"># Post Ph.d. with relevant experience must require and qualification,
                    research work as per GTU norms else application will be rejected.</td>
                </tr>
            </tbody>
        </table>
        <h1>Shree Swaminarayan Institute of Technology (MCA)</h1>
        <table>
            <thead>
                <tr>
                    <th>Post</th>                
                    <th>Principal/ Professor</th>                
                    <th>Associate Professor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No.</td>                
                    <td>1</td>                
                    <td>1</td>                
                </tr>
                <tr>
                    <td colspan="3" class="last-child"># Post Ph.d. with relevant experience must require and qualification,
                    research work as per GTU norms else application will be rejected.</td>
                </tr>
            </tbody>
        </table>
        <div class="instruction">
            <ul>
                <li>Qualification and requirement as per AICTE and GTU norms.</li>
                <li>Only Selected candidates will be call for interview and Nos. of posts may vary as per requirement at interview</li>
                <li>Interested candidate may send their resume by post or couier as per format given in concerned website along with photograph and self-attested copies of all relevant documents to the director of above concern institute address on or before 20th may, 2021</li>
            </ul>
            <p>- Managing Trustee</p>
        </div>
    </div>

    {include file="../template/includes/footer.tpl"}
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script src="{URLROOT}/node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
    <script type="module"  src="{URLROOT}/node_modules/gsap/all.js"></script>
    <script type="module" src="{URLROOT}/js/scroll.js"></script>
    <script type="text/javascript" src="{URLROOT}/js/backtotop.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/dbc30cce47.js"></script>
    <script src="{URLROOT}/js/header.js"></script>
    {literal} 
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179928256-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-179928256-1');
        </script>
    {/literal}
</body>
</html>