<x-app-layout>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<a href="{{url('/')}}" class="btn btn-danger" style="margin-left:7px; width:85px; cursor:pointer; padding: 8px; border-radius: 10px;">Back</a>


<form action="{{url('view_personne')}}" method="get">

@csrf

<div style="padding-left: 140px; padding-bottom:20px;">
<input type="submit" value="View"  class= "btn btn-primary" style="margin-left:-35px; margin-top:8px; width:85px; margin-top:-68px; cursor:pointer; padding: 8px; border-radius: 10px;">
</div>

</form>
    <!-- ********************************************************************************************************** -->
    <!-- ==============================================# Form Personne #=========================================== -->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">

@if(Session::has('succses'))

<div class="alert alert-succses" role="alerte">

{{Session::get('succses')}}
</div>
@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;"></label>

<form action="{{url('saveload')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label  class="form-label" style="font-style:bold; ">First name</label>
<div>
<input class="form-control" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="firstname" placeholder="write your First Name">
</div>
<label style="font-style:bold; ">Last name</label>
<div>
<input id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="lastname" placeholder="write your Last Name">
</div>
<div>
    
<label style="font-style:bold; ">Date de naissance</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="date" name="birthdt" placeholder="write your Date">
</div>
<label style="font-style:bold; ">Email</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="email" name="email" placeholder="write your Email">
</div>
<label style="font-style:bold; ">Adress</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="adress" placeholder="write your Adress">
</div>
<label style="font-style:bold; ">Telefoonnummer</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="tel" placeholder="write your Telefoon">
</div>
<label style="font-style:bold; ">Nationality</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="nationality" placeholder="write your Nationalit">
</div>
<label style="font-style:bold; ">LinkedIn</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="linkedin" placeholder="write your LinkedIn">
</div>

    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>
    <!-- ******************************************************************************************************** -->
    <!-- ===========================================#    Form PROFILE     #====================================== -->


<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px;border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">

@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>



@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add profile</label>

<form action="{{url('uploadpost')}}" method="post" enctype="multipart/form-data" >

@csrf

<label style="font-style:bold; ">Description</label>
<div>


<textarea id=""cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4;" type="text" name="descript"></textarea>

</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>

<!-- ********************************************************************************************************* -->
<!-- =====================================####  Forme EXEPERIENCE ###========================================= -->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">
@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>
@endif


<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add EXEPERIENCE</label>

<form action="{{url('uploadpo')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label style="font-style:bold; ">Functie</label>
<div>
<select  id=""cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="naamfunctie" value="write your Functie">
<option value=""></option>
<option value="1">Senior Accountmanager</option>
<option value="2">Accountmanager</option>
<option value="3">Junior Accountmanager</option>
<option value="4">Afstudeertagiare</option>
</select>
</div>
<label style="font-style:bold; ">Company</label>
<div>
<select  id=""cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="naamCompany" value="write your Company">
<option value=""></option>
<option value="1">Bouwbedrihf X</option>
<option value="2">Controol Handel</option>
<option value="3">Bouwmarket</option>
</select>
</div>
<label style="font-style:bold; ">Date begining</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="date" name="started_dt" placeholder="write your Company">
</div>
<label style="font-style:bold; ">Date Eind</label>
<div>
<input id=""cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="date" name="finished_dt" placeholder="write your Company">
</div>
<label style="font-style:bold; ">Description</label>
<div>
<input id=""cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="Descrip" placeholder="write your Description">
</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>
<!-- *********************************************************************************************************** -->
<!-- =====================================##    Form Education   ##============================================-->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">
@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>
@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add OPLEIDING</label>

<form action="{{url('Pastload')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label style="font-style:bold; ">School Name</label>
<div>
<select id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="naamschool" value="write your Functie">
<option value=""></option>
<option value="1">Senior Accountmanager</option>
<option value="2">Accountmanager</option>
<option value="3">Junior Accountmanager</option>
<option value="4">Afstudeertagiare</option>
</select>
</div>
<label style="font-style:bold; ">Opleiding Name</label>
<div>
<select  id="" cols="80" rows="5"style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="naamOpleiding" value="write your Company">
<option value=""></option>
<option value="1">Bouwbedrihf X</option>
<option value="2">Controol Handel</option>
<option value="3">Bouwmarket</option>
</select>
</div>
<label style="font-style:bold; ">Date begining</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="date" name="startdt" placeholder="write your Company">
</div>
<label style="font-style:bold; ">Date Eind</label>
<div>
<input  id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="date" name="finishdt" placeholder="write your Company">
</div>
<label style="font-style:bold; ">Description</label>
<div>
<input style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="description" placeholder="write your Description">
</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>

<!-- ******************************************************************************************************************* -->
<!-- ==========================================##    TAAL     ##========================================================-->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">

@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>
@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add Taal</label>

<form action="{{url('upload')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label style="font-style:bold;">Taal</label>
<div>
<select style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="nameTaal" value="write your Functie">
<option value=""></option>
<option value="NL">Nederland</option>
<option value="EN">English</option>
<option value="FR">Fransch</option>
<option value="DT">Duitsch</option>
</select>
</div>

<label style="font-style:bold; ">Description</label>
<div>
<input id="" style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="niveauTaal" placeholder="write your Description">
</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>

<!-- ******************************************************************************************************** -->
<!-- ======================================##   SKills   ##================================================== -->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">
@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>
@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add Skills</label>

<form action="{{url('postload')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label style="font-style:bold; ">Skills</label>
<div>
<select style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="nameSkills" value="write your Functie">
<option value=""></option>
<option value="NO">MS Office</option>
<option value="EX">Excel </option>
<option value="SP">SPSS </option>
<option value="PH">Photoshop</option>
</select>
</div>
<label style="font-style:bold; ">Description</label>
<div>
<input style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="niveauskill" placeholder="write your Description">
</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br> 

<!-- ************************************************************************************************************* -->
<!-- =====================================###     Hobbies     ###================================================= -->

<div style="border:1px solid #03a9f4;width:60%;margin-left:auto;margin-right: auto;padding:15px; border-radius:5px;">
<div style="padding-left: 5% ; padding-top:2%">

@if(Session::has('succses'))

<div class="alert alert-success" role="alerte">

{{Session::get('succses')}}
</div>
@endif

<label style="padding-left:20% ;font-size: 20px;font-weight:bold;">Add Hobbys</label>

<form action="{{url('uploa')}}" method="POST" enctype="multipart/form-data" >

@csrf
<label style="font-style:bold; ">Hobbys</label>
<div>
<select style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;"type="text" name="namehobby" value="write your Functie" multiple>
<option value=""></option>
<option value="1">koken</option>
<option value="2">Reizen</option>
<option value="3">Sporten</option>
</select>
</div>

<label style="font-style:bold; ">Description</label>
<div>
<input style="border-radius:5px;background-color:transparent; box-shadow: 0 35px 55px rgba(0,0,0,0.1);
outline:none;border:1px solid #03a9f4; width:92%;" type="text" name="nvHobby" placeholder="write your Description">
</div>
<div>
    <br>
    <br>
    <input type="submit" name="" style="background:#03a9f4; border-radius:10px; cursor:pointer; padding:10px">
</div>
</form>
</div>
</div>
<br>
</x-app-layout>

