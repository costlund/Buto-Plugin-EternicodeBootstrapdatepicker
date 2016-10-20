<?php
/**
<p>
http://www.eyecon.ro/bootstrap-datepicker/
</p>
<p>
</p>
 */
class PluginEternicodeBootstrapdatepicker{
  /**
  <p>
  Include widget in head or before usage.
  </p>
  <p>
  Then attache date picker to a control with Javascript like below. There should also be a html object in wf/editor for easy setup.
  </p>
  #code-javascript# 
  this.datepicker = $('#my_date_control').datepicker({
        format: 'yyyy-mm-dd',
        weekStart: 1,
        daysOfWeekHighlighted: "0,6",
        autoclose: true,
        todayHighlight: true
      });
  #code#
  */
  public static function widget_include(){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/eternicode/bootstrapdatepicker/css/bootstrap-datepicker.min.css', 'rel' => 'stylesheet'));
    $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/eternicode/bootstrapdatepicker/js/bootstrap-datepicker.min.js', 'type' => 'text/javascript'));
    //$element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/amcharts/amcharts/amexport_combined.js', 'type' => 'text/javascript'));
    //$element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/amcharts/amcharts/serial.js', 'type' => 'text/javascript'));
    wfDocument::renderElement($element);
  }
}
