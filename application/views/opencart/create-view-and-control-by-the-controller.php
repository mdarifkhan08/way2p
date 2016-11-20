<h3>Create - catalog/controller/test/test.php</h3>
<pre class="prettyprint">
&lt;?php
class ControllerTestTest extends Controller {
	public function index() {
		
		$this->load->language('test/test');
		$this->document->setTitle($this->language->get('heading_title'));
		$data['title'] = $this->document->getTitle();
	    $this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/test/test.tpl',$data));
	}

}

</pre>

<h3>Create - catalog/language/test/test.php</h3>
<pre class="prettyprint">
&lt;?php
$_['heading_title']  = 'Testing View,Controller and Language In Opencart';
$_['text_heading']    = 'Creating Our Own View';

</pre>

<h3>Create - catalog/view/theme/default/template/test/test.tpl</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;?php echo $title; ?>&lt;/title>
&lt;/head>
&lt;body>
This page is controlled by test controller
&lt;/body>
&lt;/html>
</pre>

<h3>Output</h3>
<img src="<?php echo base_url();?>/static/images/ice_screenshot_20160110-193228.png" class="img-responsive">
