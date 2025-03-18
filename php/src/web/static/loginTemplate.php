<?php
if(isset($logged))
    echo '<a id="logout" href="logout" class="noDec"><div class="redDiv">wyloguj się</div></a>';
else
    echo '<a id="logout" href="galeria-logowanie"><div class="blueDiv">zaloguj się</div></a>';

