<?php
$id=$image['_id'];
$name=$image['name'];
$title=$image['title'];
$author=$image['author'];
$status=$image['status'];
$chk="";
$sts="";
if($checked) $chk='checked';
if($status=='private') $sts='prywatne';
echo "<div class='gallery-image'>
                    <a href='images/{$id}---wm-{$name}' target='_blank'>
                        <figure>
                            <input type='checkbox' name='imgcheck' id='{$id}' {$chk}>   {$sts}
                            <img src='images/{$id}---ic-{$name}' alt='zestaw' >
                            <figcaption>
                                tytuł: {$title}
                                <br>
                                autor: {$author}
                            </figcaption>
                        </figure>
                    </a>
                </div>";

