<h3>Create -> catalog/language/test/test.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
$_['heading_title']= 'Test With Test Controller';
</pre>




<h3>Create -> catalog/controller/test/test.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
class ControllerTestTest extends Controller {
	public function index(){
		$this->load->language('test/test');
		$this->document->setTitle($this->language->get('heading_title'));
		$data['title'] = $this->document->getTitle();
		
		$data['action'] = $this->url->link('test/test', '', 'SSL');
		
		$this->load->model('test/test');
		
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$id = $this->model_test_test->addTest($this->request->post);
		}
		
		$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/test/test.tpl',$data));
	}
}	
</pre>



<h3>Create -> catalog/view/theme/default/template/test/test.tpl</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;?php echo $title; ?>&lt;/title>
&lt;/head>
&lt;body>
&lt;form action="&lt;?php echo $action; ?>" method="POST">
&lt;input type="text" name="name"/>
&lt;input type="submit" name="submit">
&lt;/form>
&lt;/body>
&lt;/html>	
</pre>




<h3>Create -> catalog/model/test/test.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
class ModelTestTest extends Model {
	public function addTest($data) {
		$this->event->trigger('pre.test.add', $data);
		
		$this->db->query("INSERT INTO " . DB_PREFIX . "test SET name = '" . $this->db->escape($data['name']) . "'");
	
		$address_id = $this->db->getLastId();
		
		$this->event->trigger('post.test.add', $address_id);
		
		return $address_id;
	}
}	
</pre>
