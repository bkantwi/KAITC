<head>
{{--//     Link to external CSS file--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>

<body>
{{--// multistep form--}}
<form id="msform">
    @csrf
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Question 1</h2>
        <h3 class="fs-subtitle">What do you consider your main strengths to be?</h3>
        <!--<p class="help-block">List your strengths here.</p>-->
        <textarea class="form-control" name="CAT_Custom_1" id="CAT_Custom_1" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 2</h2>
        <h3 class="fs-subtitle">What do your colleagues consider your main strengths to be?</h3>
        <textarea class="form-control" name="CAT_Custom_2" id="CAT_Custom_2" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 3</h2>
        <h3 class="fs-subtitle">What have been your main achievements?</h3>
        <textarea class="form-control" name="CAT_Custom_3" id="CAT_Custom_3" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 4</h2>
        <h3 class="fs-subtitle">What do you consider your main weaknesses to be?</h3>
        <textarea class="form-control" name="CAT_Custom_4" id="CAT_Custom_4" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 5</h2>
        <h3 class="fs-subtitle">What do your colleagues consider your main weaknesses to be?</h3>
        <textarea class="form-control" name="CAT_Custom_5" id="CAT_Custom_5" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 6</h2>
        <h3 class="fs-subtitle">In what areas would you like to improve your clinical skills?</h3>
        <textarea class="form-control" name="CAT_Custom_6" id="CAT_Custom_6" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 7</h2>
        <h3 class="fs-subtitle">In what areas would you like to improve your non-clinical skills?</h3>
        <textarea class="form-control" name="CAT_Custom_7" id="CAT_Custom_7" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 8</h2>
        <h3 class="fs-subtitle">Are there any specific areas of compliance training that you need to complete?</h3>
        <textarea class="form-control" name="CAT_Custom_8" id="CAT_Custom_8" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 9</h2>
        <h3 class="fs-subtitle">What postgraduate qualifications do you hold?</h3>
        <textarea class="form-control" name="CAT_Custom_9" id="CAT_Custom_9" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Question 10</h2>
        <h3 class="fs-subtitle">What postgraduate qualifications or training do you wish to obtain?</h3>
        <textarea class="form-control" name="CAT_Custom_10" id="CAT_Custom_10" rows="4" onkeydown="if(this.value.length>=4000)this.value=this.value.substring(0,3999);"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>

<!-- Link to external JavaScript file -->
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>

