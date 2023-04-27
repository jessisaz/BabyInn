<?php
include_once 'header.php';
?>
        
        <section class="main_section">
        <p><br><br></p>
        <h2 class="section_header"> Make Appointment Now! </h2>

        <div class="container">
            <div class="progress-bar">
                <div class="step">
                    <p>
                        Date
                    </p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Time
                    </p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>
                        Contact
                    </p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>
            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="calendar">
                            <div class="month">
                                <h1> </h1>
                                <h3> </h3>
                                <i class="fas fa-angle-left prev_month"></i>
                                <i class="fas fa-angle-right next_month"></i>
                            </div>
                            <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                            </div>
                            <div class="days"></div>
                        </div>
                        <div class="center">
                            <div class="field">
                                <button class="firstNext next">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="page">
                        <!-- time selection not done yet -->
                        <div class="center">
                            <div class="field btns">
                                <button class="prev-1 prev">Previous</button>
                                <button class="next-1 next">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="page">
                        <div class="center">
                            <div class="title">
                                Contact Information
                            </div>
                        </div>
                        <div class="center">
                            <div class="field">
                                <div class="label"> 
                                    Name
                                </div>
                                <input type="text">
                            </div>
                        </div>
                        <div class="center">
                            <div class="field">
                                <div class="label"> 
                                    Email
                                </div>
                                <input type="text">
                            </div>
                        </div>
                        <div class="center">
                            <div class="field">
                                <div class="label"> 
                                    Phone
                                </div>
                                <input type="text">
                            </div>
                        </div>
                        <div class="center">
                            <div class="field">
                                <div class="label"> 
                                    Additional Information
                                </div>
                                <input class="additional_information" type="text">
                            </div>
                        </div>
                        <div class="center">
                            <div class="field btns">
                                <button class="prev-2 prev">Previous</button>
                                <button class="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="page">
                        <div class="thank_you">
                            <div class="center">
                                <h1> You successfully created your booking  </h1>
                            </div>
                            <div class="center">
                                <img src="images/check_mark.jpg">
                            </div>
                            <div class="center">
                                <h1> <b>Thank you!</b> </h1>
                            </div>
                            <div class="center">
                                <h1> <b>We look forward to</b> talking to you soon! </h1>
                            </div>
                            <div class="center">
                                <p> Your booking detail has been sent to your email. </p>
                            </div>
                            <div class="center">
                                <p> You can call us to make changes to your booking. </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

<?php
    include_once 'footer.php';
?>
