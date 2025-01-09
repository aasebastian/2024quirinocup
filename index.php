<?php include('include/header.php');?>
<section class="section py-5">
   <div class="container">
      <div class="header-title pt-3">
                     <span>SCHEDULE</span>
                  
            <div class="col-md-12">
         <div class="py-1 firstpill">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Regular Season (Monday | 13 JAN 2025)</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Knockout Stage (Friday | 17 JAN 2025)</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane1" type="button" role="tab" aria-controls="profile-tab-pane1" aria-selected="false">Championship - (Friday | 17 JAN 2025)</button>
              </li>
            <!-- <div class="col-md-2 ms-auto">
                  <div class="dropdown w-100">
                        <button class="btn btn-light dropdown-toggle rounded-0 w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Filter team
                        </button>
                        <ul class="dropdown-menu w-100 p-0">
                          <li><a class="dropdown-item" href="#"> <img class="dd-option-image" src="assets/img/blacklist-500.png" width="35px"> BLCK</a></li>
                          <li><a class="dropdown-item" href="#"> <img class="dd-option-image" src="assets/img/onic-500.png" width="35px"> ONIC</a></li>
                          <li><a class="dropdown-item" href="#"> <img class="dd-option-image" src="assets/img/nxp-evos-500.png" width="35px"> NXPE</a></li>
                        </ul>
                </div>
              </div> -->

            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
           <ul class="nav nav-tabs mt-4 mb-3" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link rounded active" id="week1-tab" data-bs-toggle="tab" data-bs-target="#week1-tab-pane" type="button" role="tab" aria-controls="week1-tab-pane" aria-selected="true">Swiss Stage</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link rounded" id="week2-tab" data-bs-toggle="tab" data-bs-target="#week2-tab-pane" type="button" role="tab" aria-controls="week2-tab-pane" aria-selected="false">Lower Bracket</button>
              </li>
             <li class="nav-item" role="presentation">
                <button class="nav-link rounded" id="week3-tab" data-bs-toggle="tab" data-bs-target="#week3-tab-pane" type="button" role="tab" aria-controls="week3-tab-pane" aria-selected="false">Upper Bracket</button>
              </li>
              
              
              <!--<li class="nav-item" role="presentation">
                <button class="nav-link rounded" id="week7-tab" data-bs-toggle="tab" data-bs-target="#week7-tab-pane" type="button" role="tab" aria-controls="week7-tab-pane" aria-selected="false">Week 7</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link rounded" id="week8-tab" data-bs-toggle="tab" data-bs-target="#week8-tab-pane" type="button" role="tab" aria-controls="week8-tab-pane" aria-selected="false">Week 8</button>
              </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="week1-tab-pane" role="tabpanel" aria-labelledby="week1-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">01:00 PM - 02:00 PM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="80px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">&nbsp;</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="80px">
                                        <div class="team-name"></div>
                                    </div>
                                  
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;"> &nbsp; </p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="80px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">&nbsp;</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="80px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>  
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                </div>                              
                            </div>
                        </div>
                    </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="week2-tab-pane" role="tabpanel" aria-labelledby="week2-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-5">
                       <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">03:00 PM - 05:00 PM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                    <div class="team-name">(TBD) Loser - Game 1</div>
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">&nbsp;</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                    <div class="team-name">(TBD) Loser - Game 2</div>
                                        <div class="team-name"></div>
                                    </div>
                                  
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-md-4">
                       
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                
                                <div class="divider mt-0 mb-0"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week3-tab-pane" role="tabpanel" aria-labelledby="week3-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-5">
                       <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">03:00 PM - 05:00 PM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                    <div class="team-name">(TBD) Winner - Game 1</div>
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">&nbsp;</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                    <div class="team-name">(TBD) Winner - Game 2</div>
                                        <div class="team-name"></div>
                                    </div>                                  
                                </div>  
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-4">                     
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">                               
                                <div class="divider mt-0 mb-0"></div>
                               
                                <div class="divider mt-0 mb-0"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">                      
                        <div class="card bg-transparent border-0 rounded-0 score">
                            
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week4-tab-pane" role="tabpanel" aria-labelledby="week4-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-4">
                       <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">09:00 AM - 09:30 AM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Solo Men
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Doubles
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week5-tab-pane" role="tabpanel" aria-labelledby="week5-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Solo Women
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Solo Men
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Doubles
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week6-tab-pane" role="tabpanel" aria-labelledby="week6-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-4">
                       <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">09:00 AM - 09:30 AM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">10:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Solo Men
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">11:00 AM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                <br> Doubles
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/red-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/yellow-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/blue-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">2:00 PM</div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/white-logo.png" width="40px">
                                        <div class="team-name"></div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week7-tab-pane" role="tabpanel" aria-labelledby="week7-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                19 Aug 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/onic-500.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/nxp-evos-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                02 OCT 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                              03 Oct 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="week8-tab-pane" role="tabpanel" aria-labelledby="week8-tab" tabindex="0">
               <div class="row">
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                19 Aug 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/onic-500.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/nxp-evos-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                                02 OCT 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                                <div class="divider mt-0 mb-0"></div>
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-subtitle mb-3">
                            <span>
                              03 Oct 2022
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="assets/img/rsg-500-v2.png" width="40px">
                                        <div class="team-name">RSG</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">6:00 PM</div>
                                            <div class="time2">2 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="assets/img/tnc-500.png" width="40px">
                                        <div class="team-name">TNC</div>
                                    </div>
                                    <div class="position-absolute buttn">
                                        <button class="btn btn-primary btn-sm border-0">New</button>
                                        <button class="btn btn-primary btn-sm border-0">Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
              </div>
              
           <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  <div class="row">                      
                    <div class="col-md-8">
                        <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">08:00 AM - 10:00 AM </p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="" width="40px">
                                        <div class="team-name">(TBD) Lower Bracket - Winner</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time"> &nbsp;<br></div>
                                        <div class="divider mt-0 mb-0"></div>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="">
                                        <div class="team-name">(TBD) Upper Bracket - Loser</div>
                                    </div>                                   
                                </div> 
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
              </div>
                
                <div class="tab-pane fade mt-3" id="profile-tab-pane1" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  <div class="row">
                    
                      <div class="col-md-8">
                      <div class="header-subtitle mb-3">
                            <span>
                                <p style="color:red;">10:00 AM - 12:00 PM</p>
                            </span>
                        </div>
                        <div class="card bg-transparent border-0 rounded-0 score">
                            <div class="card-body p-0">
                                <div class="d-flex flex-row justify-content-around align-items-top team pt-3 pb-3 position-relative">
                                    <div class="text-center">
                                        <img src="" width="40px">
                                        <div class="team-name">(TBD) Winner - <br>Upper bracket</div>
                                    </div>
                                    <div class="text-center mt-n2">
                                        <div class="time">&NonBreakingSpace;</div>
                                         <div class="divider mt-0 mb-0"></div> <br>
                                            <div class="time2">0 : 0</div>
                                    </div>
                                    <div class="text-center">
                                        <img src="" width="40px">
                                        <div class="team-name">(TBD) Winner - <br>Knockout Stage</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                </div>
              </div>
              
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('include/footer.php');?>