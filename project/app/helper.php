<?php

function flash ($cssContent){
    Session::flash('message', $cssContent);

}