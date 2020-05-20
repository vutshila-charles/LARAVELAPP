<DOCTYPE html>


<head>
     <title> Flight Ticket Booking Form</title>
    <link rel=“stylesheet” href=“style.css”>
    <link rel=“stylesheet” href=“https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css”>
   </head>

<style>
body{
Background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(IMG_8650.jpg);

Background-size: cover;
Background-position: center;
}

.booking-form-box
{
Max-width: 350px;
Border: 1px solid #ced4da;
Margin: 10% auto 0;
}

.radio-btn
{
Margin: 0 20px;
}
.radio-btn .btn
{margin: 20px 10px 20px 0;
}

.radion-btn .btn::after
{
Content: ‘’;
Height: 15px;
Width: 15px;
Top: -2px;
Left:-1px;
Background-color: #fff;
Position: relative;
Display: inline-block;
Border: 3px solid #fff;
Visibility: visible;
border-radius:50%;

}

.radio-btn .btn:checked::after
{
Content: ‘’;
background-color: #000;
Transition: 0.5s;


}

.radion-btn span
{

Color: #fff;
Margin-right: 5px;
Font-size: 12px;
}


.booking-form
{
Padding: 0 20px 20px;
}

.booking-form label
{
Margin-bottom: 5px;
Margin-top: 10px;
Font-size: 12px;
Color: #fff;

}

.Input::placeholder
{
Color : #fff !important;
}

.input-grp
{

Width: 15px;
Display: inline-block;
}
.form-control
{

Font-size:12px;
Border-radius:0;
Color: #fff;
Background:transparent;
Box-shadow: none;
}
.select-date::-webkit-inner-spin-button,
.select-date::-webkit-inner-spin-button
{

-webkit-apperance: none;
Margin: 0;
}

.select-date::-webkit-calender-picker-indicator
{
Background: transparent;
}

.custom-select
{
Color: #fff;
Font-size:12px;
Border: 1px solid #ced4da;
Box-shadow: none;
Border-radius: 0;
Background: transparent;
}

</style>

<body>

<div class="booking-form-box">
<div class="radio-btn">
<input type="radio" class="btn" name="check" checked="checked">
<span> Roundtrip</span>
<Input type="radio" class="btn" name="check"><span>One way</span>
<input type="radio" class="btn" name="check"><span>Multy-City</span>
</div>


<div class="booking-form">
<label>Flying Form</label>
<input type="text" class="form-control" placeholder="departure Airport">
</div>
<div class="booking-form">
<label>Flying to</label>
<input type="text" class="form-control" placeholder="Arrival Airport">
</div>

<div class="booking-form">
<label>Departing</label>
<input type="date" class="form-control select-date">
</div>

<div class="booking-form">
<label>Returning</label>
<input type="date" class="form-control select-date">
</div>

<div class="booking-form">
<label>Adults</label>
<input type="number" class="form-control"  value="1">
</div>

<div class="booking-form">
<label>Children</label>
<input type=“number” class="form-control"  value="0">
</div>

<div class="booking-form">
<label>Travel Class</label>
<select class="custom-select">
<option value="1">Economy</option>
<option value="2">Business Class</option>
</select>
</div>
</div>


</body>

</html>