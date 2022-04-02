<?php
class Utils {
    public function printLayoutTemplate($title) {
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            @page { margin: 20px; }
            body{ font-family: sans-serif; }
            th{
                border: 1px solid;
            }
            td{
                font-size: 14px;
                border: 1px solid;
                padding-right: 2px;
                padding-left: 2px;
            }
    
            .p-name{
                text-align:center;
                margin-bottom:5px;
            }
    
            .address{
                text-align:center;
                margin-top:0px;
            }
    
            .p-details{
                margin:0px;
            }
    
            .ar{
                text-align:right;
            }
    
            .al{
                text-left:right;
            }
    
            .align-text{
                text-align:center;
            }
    
            .align-text td{
                text-align:center;
            }
    
            .w td{
                width:20px;
            }
    
        
    
            .b-text .line{
                margin-bottom:0px;
            }
    
            .b-text .b-label{
                font-size:12px;
                margin-top:-7px;
                margin-right:12px;
                font-style:italic;
            }
    
            .f-courier{
                font-family: monospace, sans-serif;
                font-size:14px;
            }
    
            span {
                font-family: DejaVu Sans; sans-serif;
            }
            
         
            </style>
            </head>

            <body>

            <div style="width:100%">

            <h1 class="p-name">Senior High School</h1>';
            if ($title != 'Report Card') {
                $html .= '
                <div style="text-align:center;">Instructor: '.$_GET['instructor'].'<div>
                <div style="text-align:center;">Section: '.$_GET['sec'].'<div>
                <div style="text-align:center;">Subject: '.$_GET['subj'].'<div>';
            }

            $html .= '
            <div style="text-align:center;">SY: '.$_GET['sy']. ' '. $_GET['term'] . ' Term'.'<div>
            <h2 style="text-align:center;">'.$title.'</h2>';

            return $html;
     }
}
?>