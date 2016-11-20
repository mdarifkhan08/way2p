<h3>create -> catalog/language/custom/student.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
$_['title']="Student Registration(Insert Data Demo) With Opencart";
$_['heading']="Register Student(Insert Data Demo)";
</pre>

<h3>create -> catalog/model/custom/student.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
class ModelCustomStudent extends Model {
	public function addStudent($data) {
		$this->event->trigger('pre.student.add', $data);

		$this->db->query("INSERT INTO " . DB_PREFIX . "student SET firstname = '" . $this->db->escape($data['firstname']) . "',lastname = '" . $this->db->escape($data['lastname']) . "',address = '" . $this->db->escape($data['address']) . "'");

		$student_id = $this->db->getLastId();

		$this->event->trigger('post.student.add', $student_id);

		return $student_id;
	}
}	
</pre>

<h3>create -> catalog/controller/custom/student.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
class ControllerCustomStudent extends Controller{
	public function index(){
		$this->load->language('custom/student');
		$this->document->setTitle($this->language->get('title'));
		$data['title'] = $this->document->getTitle();
		$data['action'] = $this->url->link('custom/student', '', 'SSL');
		$this->load->model('custom/student');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$data['heading']=$this->language->get('heading');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$id = $this->model_custom_student->addStudent($this->request->post);
		}
		
		$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/custom/student.tpl',$data));
	}
}	
</pre>

<h3>create -> catalog/view/theme/default/template/custom/custom.tpl</h3><hr/>
<pre class="prettyprint">
&lt;?php echo $header; ?>
&lt;div class="container">
&lt;h1 style="text-align:center;">&lt;?php echo $heading  ?>&lt;/h1>&lt;hr/>
&lt;table class="table table-bordered">
&lt;form action="&lt;?php echo $action; ?>" method="POST">
&lt;tr>&lt;td>First Name&lt;/td>&lt;td>&lt;input type="text" name="firstname" class="form-control"/>&lt;/td>&lt;/tr>
&lt;tr>&lt;td>Last Name&lt;/td>&lt;td>&lt;input type="text" name="lastname" class="form-control"/>&lt;/td>&lt;/tr>
&lt;tr>&lt;td>Address&lt;/td>&lt;td>&lt;textarea name="address" class="form-control">&lt;/textarea>&lt;/td>&lt;/tr>
&lt;tr>&lt;td>&lt;/td>&lt;td>&lt;input type="submit" value="Register">&lt;/td>&lt;/tr>
&lt;/form>
&lt;/table>
&lt;/div>
&lt;?php echo $footer; ?>	
</pre>


<h3>db.sql(prefix oc_ is not  necessary)</h3><hr/>
<pre class="prettyprint">
create table oc_student(
student_id int(11) NOT NULL AUTO_INCREMENT,
`firstname` varchar(50) NOT NULL,
`lastname` varchar(50) NOT NULL,
`address` varchar(255) NOT NULL,
PRIMARY KEY (`student_id`)
);	
</pre>

<h3>Output</h3><br/>
<img src="<?php echo base_url();?>/static/images/ice_screenshot_20160118-185930.png" class="img-responsive"/><br/>
<img src="<?php echo base_url();?>/static/images/ice_screenshot_20160118-190103.png" class="img-responsive"/>
