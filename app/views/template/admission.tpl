<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{URLROOT}/css/header.css">
    <link rel="stylesheet" href="{URLROOT}/css/footer.css">
    <link rel="stylesheet" href="{URLROOT}/css/admission.css">
    <link rel="stylesheet" href="{URLROOT}/node_modules/bootstrap/dist/css/bootstrap.css">    
    <title>Admission</title>
</head>
<body>
    <!-- hero section start -->
    {include file="../template/includes/header.tpl"} 
    <div class="header-section position-relative">
        {include file="../template/includes/header2.tpl"}    
        <div class="container-fluid media-container position-absolute">
            <img src="{URLROOT}/img/img1.jpg" class="video1 container-fluid">
        </div>    
    </div>
    {include file="../template/includes/header3.tpl"}  
    
    <!-- admission section start -->
    <div class="container-fluid">
        <div id="admission">
            <nav>
              <ul class="nav nav-pills nav-fill">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">BE (Fresh)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">BE (D2D)</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MCA</a>
                  </li>
              </ul>
            </nav>
            <div class="timeline">
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 1</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nostrum?</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 2</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, id!</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 3</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, pariatur.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 4</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, commodi.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 5</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, soluta.</p>
                  </div>
              </div>
              <div class="text-container right">
                  <div class="content">
                  <p class="h5">step 6</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, dolorem.</p>
                  </div>
              </div>
            </div>
        </div>

        <!-- mq-admission -->
        <div id="mq">
          <div class="mq-heading">
              <p>Admission to Management Quota Seats (BE & MCA)</p>
          </div>
          <div class="mq-info">
              <p>Applications are invited from eligible candidates enlisted in concerned ACPC merit list for admission against 25% Management Quota Seats in with form fees RS.350/- at SSIT Campus</p>
          </div>
          <div class="mq-seats">
              <table >
                  <thead >
                    <tr>
                      <th scope="col">Branch</th>
                      <th scope="col">Computer</th>
                      <th scope="col">Civil</th>
                      <th scope="col">Electrical</th>
                      <th scope="col">E.C.</th>
                      <th scope="col">Mechanical</th>
                      <th scope="col">MCA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Seats</th>
                      <td>15</td>
                      <td>15</td>
                      <td>15</td>
                      <td>15</td>
                      <td>15</td>
                      <td>15</td>
                    </tr>
                  </tbody>
              </table>                                
          </div>
          <div class="mq-imp-dates">
              <p>schedule for MQ Admission</p>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Activities</th>
                      <th>Important Dates for Admission In BE</th>
                      <th>Important Dates for Admission In MCA</th>                       
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Issue and Acceptance of application form</td>
                      <td>08-07-2019 <b>to</b> 15-07-2019</td>
                      <td>18-07-2019 <b>to</b> 26-07-2019</td>                       
                    </tr>
                    <tr>
                      <td>Display Merit List</td>
                      <td>25-07-2019</td>
                      <td>27-07-2019</td>                       
                    </tr>
                    <tr>
                      <td>Counselling for MQ Quota</td>
                      <td>25-07-2019</td>
                      <td>30-07-2019</td>                       
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>

        <!-- merit list -->
        <div id="merit-list">
          <p class="ml-title">MERIT LIST FOR : <u>BE Management Quota Admission : 2019-20</u></p>
          <P class="ml-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sapiente aliquid accusantium unde alias error cumque possimus exercitationem rem rerum?</P>
          <nav class="navbar ml-search">
            <form class="form-inline">
              <input class="form-control" type="search" placeholder="Enter Your Name Here" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form>
          </nav>
          <div class="ml-lists">
            <table>
              <thead>
                <tr>
                  <td>Sr. No</td>
                  <td>Inter-Sc Merit list</td>
                  <td>ACPC Merit No</td>
                  <td>GUJCET Roll No</td>
                  <td>Name of the Candidate</td>
                  <td>Category</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>SSIT_1</td>
                  <td>18832</td>
                  <td>826213</td>
                  <td>FULL NAME OF CANDIDATE</td>
                  <td>MQ</td>
                </tr>
              </tbody>
            </table>
            <nav aria-label="ml-pagination">
              <ul class="pagination pagination-sm justify-content-end">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-download">
            <p>Merit List for <u>BE Management Quota Admission 2019-20</u></p>
            <button class="btn" type="submit">Download</button>
          </div>
        </div>

        <!-- FAQs -->
        <div id="faq">
          <p class="faq-title">Frequntly Asked Question (FAQs)</p>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Admission in Bachelor in Engineering
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Admission in MCA
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Admission in Falcon Inc.
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Admission in Falcon Networks.
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Admission in Falcon Servers.
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <!-- admission section ends -->
    {include file="../template/includes/footer.tpl"}
    <script src="{URLROOT}/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="{URLROOT}/js/scroll.js"></script>
    <script src="{URLROOT}/node_modules/bootstrap/dist/js/bootstrap.js"></script>
   
</body>
</html>