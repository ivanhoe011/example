<?php
  // Standard inclusions      
  include("pChart/pData.class");   
  include("pChart/pChart.class");   
 
  // Dataset definition    
  $DataSet = new pData;   
  $DataSet->AddPoint(array(1079,1151,1185,1226,1121,738,710),"Visitor");
  $DataSet->AddPoint(array("1 พ.ย.","2 พ.ย.","3 พ.ย.","4 พ.ย.","5 พ.ย.","6 พ.ย.","7 พ.ย."),"Day");
  $DataSet->AddSerie("Visitor");   
  $DataSet->SetAbsciseLabelSerie("Day");   
  $DataSet->SetYAxisName("Visitors");
  $DataSet->SetYAxisUnit("ip");
 
  // Initialise the graph   
  $Graph = new pChart(700,230);   
  $Graph->setFontProperties("Fonts/tahoma.ttf",8);   
  $Graph->setGraphArea(70,30,680,200);   
  $Graph->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);   
  $Graph->drawRoundedRectangle(5,5,695,225,5,230,230,230);   
  $Graph->drawGraphArea(255,255,255,TRUE);
  $Graph->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2);   
  $Graph->drawGrid(4,TRUE,230,230,230,50);
 
  // Draw the 0 line   
  $Graph->setFontProperties("Fonts/tahoma.ttf",6);   
  $Graph->drawTreshold(0,143,55,72,TRUE,TRUE);   
 
  // Draw the line graph
  $Graph->drawLineGraph($DataSet->GetData(),$DataSet->GetDataDescription());   
  $Graph->drawPlotGraph($DataSet->GetData(),$DataSet->GetDataDescription(),3,2,255,255,255);   
 
  // Finish the graph   
  $Graph->setFontProperties("Fonts/tahoma.ttf",8);   
  $Graph->drawLegend(75,35,$DataSet->GetDataDescription(),255,255,255);   
  $Graph->setFontProperties("Fonts/tahoma.ttf",10);   
  $Graph->drawTitle(60,22,"Google Analytics",50,50,50,585);   
  $Graph->Stroke("example1.png");      
 ?>