@extends('layouts.base')

@section('content')

    <div class="theme-page padding-bottom-66">
        <div class="clearfix">
            <div class="row full-width">
                <div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
            </div>
            <div class="row page-margin-top">
                <div class="column column-1-1">
                    <div class="row">
                        <h2 class="box-header">BOOK AN APPOINTMENT</h2>
                        <p class="description align-center">We are one of the leading car inspection shops serving customers in Nigeria.<br>All inspection services are performed by highly qualified mechanics.</p>
                    </div>
                </div>
            </div>
            <div class="row page-margin-top">
                <form class="contact-form cost-calculator-container" id="contact-form" method="post" action="contact_form/contact_form.php">
                    <div class="row">
                        <fieldset class="column column-1-3">
                            <div class="cost-calculator-box clearfix">
                                <label>VEHICLE YEAR</label>
                                <input type="hidden" name="vehicle-year-label" value="VEHICLE YEAR">
                                <div class="cost-slider-container">
                                    <input id="vehicle-year" class="cost-slider-input" name="vehicle-year" type="number" value="2008">
                                    <div class="cost-slider" data-value="2008" data-step="1" data-min="1990" data-max="2018" data-input="vehicle-year"></div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="column column-1-3">
                            <div class="cost-calculator-box clearfix">
                                <label>VEHICLE MAKE</label>
                                <input type="hidden" name="vehicle-make-label" value="VEHICLE MAKE">
                                <select name="vehicle-make" id="vehicle-make" class="cost-dropdown">
                                    <option value="" selected="selected">Choose car make...</option>
                                    <option value="General Motors">Honda</option>
                                    <option value="Land Rover">Range Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="Lincoln">Toyota</option>
                                    <option value="Mazda">KIA</option>
                                    <option value="Mercedes - Benz">Mercedes - Benz</option>
                                    <option value="Mercury">Hyundai</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Renault">Volvo</option>
                                </select>
                                <input type="hidden" class="vehicle-make" name="vehicle-make-name" value="">
                            </div>
                        </fieldset>
                        <fieldset class="column column-1-3">
                            <div class="cost-calculator-box clearfix">
                                <label>VEHICLE BRAND</label>
                                <input type="hidden" name="vehicle-brand" value="VEHICLE BRAND">
                                <input id="vehicle-brand" class="cost-slider-input big" name="vehicle-brand" type="text" value="" placeholder="Vehicle Brand">
                                <!--the plan here is to make an ajax call everytime a user clicks on vehicle make so that the brands show up here to select from but for now, they would have to type it in-->
                            </div>
                        </fieldset>
                    </div>
                    <div class="row page-margin-top">
                        <fieldset class="column column-1-2">
                            <div class="cost-calculator-box clearfix">
                                <label>PREFFERED DATE OF APPOINTMENT</label>
                                <input type="hidden" name="appointment-date-label" value="PREFFERED DATE OF APPOINTMENT">
                                <div class="datepicker-container">
                                    <span class="ui-icon template-arrow-dropdown"></span>
                                    <input id="appointment-date" class="cost-slider-datepicker big" name="appointment-date" value="" placeholder="Preffered Date of Appointment">
                                </div>
                            </div>
                            <div class="cost-calculator-box page-margin-top clearfix">
                                <label>PREFFERED TIME</label>
                                <input type="hidden" name="time-frame-label" value="PREFFERED TIME FRAME">
                                <select name="time-frame" id="time-frame" class="cost-dropdown">
                                    <option value="" selected="selected">Choose...</option>
                                    <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                                    <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                                    <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                                    <option value="12:00 PM - 01:00 PM">12:00 PM - 01:00 PM</option>
                                    <option value="01:00 PM - 02:00 PM">01:00 PM - 02:00 PM</option>
                                    <option value="02:00 PM - 03:00 PM">02:00 PM - 03:00 PM</option>
                                    <option value="03:00 PM - 04:00 PM">03:00 PM - 04:00 PM</option>
                                    <option value="04:00 PM - 05:00 PM">04:00 PM - 05:00 PM</option>
                                    <option value="05:00 PM - 06:00 PM">05:00 PM - 06:00 PM</option>
                                </select>
                                <input type="hidden" class="time-frame" name="time-frame-name" value="">
                            </div>
                            <div class="cost-calculator-box page-margin-top clearfix">
                                <label>SELECT SERVICES NEEDED</label>
                                <ul class="checkboxes-list margin-top-20">
                                    <li>
                                        <input type="hidden" value="Pre-purchase Inspection" name="Pre-purchase inspection">
                                        <input type="checkbox" data-value="1" value="0" name="pre-purchase-inspection" class="cost-slider-input type-checkbox" id="pre-purchase-inspection">
                                        <label for="pre-purchase-inspection" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Pre-purchase inspection</label>
                                    </li>
                                    <li>
                                        <input type="hidden" value="Vehicle Scan and Check-up" name="vehicle-scan-and-check-up">
                                        <input type="checkbox" data-value="1" value="0" name="vehicle-scan-and-check-up" class="cost-slider-input type-checkbox" id="vehicle-scan-and-check-up">
                                        <label for="vehicle-scan-and-check-up" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Vehicle Scan and Check-up</label>
                                    </li>
                                    <li>
                                        <input type="hidden" value="Fleet management" name="fleet-management">
                                        <input type="checkbox" data-value="1" value="0" name="fleet-management" class="cost-slider-input type-checkbox" id="fleet-management">
                                        <label for="fleet-management" class="checkbox-label template-bullet"><span class="checkbox-box"></span>Fleet management</label>
                                    </li>
                                    <li>
                                        <input type="hidden" value="Pre-auction Inspection" name="pre-auction-inspection">
                                        <input type="checkbox" data-value="1" value="1" checked="checked" name="pre-auction-inspection" class="cost-slider-input type-checkbox"
                                               id="pre-auction-inspection">
                                        <label for="pre-auction-inspection" class="checkbox-label template-bullet">
                                            <span class="checkbox-box"></span>Pre-auction inspection</label>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>
                        <fieldset class="column column-1-2">
                            <label>CONTACT DETAILS</label>
                            <input class="text-input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
                            <input class="text-input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
                            <input class="text-input" name="phone" type="text" value="Your Phone" placeholder="Your Phone">
                            <textarea class="margin-top-20" name="message_appointment" placeholder="Additional Questions or Comments">Additional Questions or Comments</textarea>
                            <input type="hidden" name="action" value="contact_form" />
                            <input type="hidden" name="form_type" value="appointment">
                            <a class="more margin-top-20 display-block submit-contact-form" href="#" title="SUBMIT NOW"><span>SUBMIT NOW</span></a>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection