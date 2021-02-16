@extends('layouts.app')
@section('style')

@endsection

@section('content')
    <div class="Contact" style="margin: auto; max-width: fit-content;">
            <div class="contactContainer" style="margin:auto;font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
                <div class="ContactFullName">
                    <div Class="ContactHeaderContainer">
                        <div class="ContactHeaderText"><h3 style="font-size: 2.5rem;">Contact Us</h3></div>
                    </div>

                    <div class="NameLabel" style="font-weight: bold;">
                        <label for="Name">Full Name</label>
                    </div>
                    <input type="text" id="Name" name="FullName" placeholder="Full Name" style="width:100%">


                    <div class="ContactEmail">
                        <div class="EmailLabel" style="font-weight: bold;">
                            <label for="Email">Email Address</label>
                        </div>
                        <input type="text" id="Email" name="EmailAddress"
                               placeholder="Email Address" style="width:100%">
                    </div>

                    <div class="ContactMobile">
                        <div class="MobileLabel" style="font-weight: bold;">
                            <label for="Mobile">Mobile Number</label>
                        </div>
                        <input type="text" id="Mobile" name="MobileNumber" placeholder="0821234567" style="width:100%">
                    </div>

                    <div Class="ContactMessage">
                        <div Class="MessageLabel" style="font-weight: bold;">
                            <label for="Message">Message</label>
                        </div>
                        <div class="MessageArea" style="display: flex; margin-bottom:15px" >
                        <textarea id="Message" rows="4" cols="50"></textarea>
                        </div>
                    </div>

                    <div Class="ContactSubmit" style="text-align: center;" >
                        <input class="btn btn-info" style="font-weight: bold;" type="submit" onclick='validation()' name="submit" >
                    </div>
                </div>
            </div>
    </div>




@endsection

@section('script')


@endsection
