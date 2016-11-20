<h3>application/controllers/LanguageSwitcher.php</h3><hr/>
<pre class="prettyprint">
&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LanguageSwitcher extends CI_Controller
{
    public function __construct() {
        parent::__construct();     
    }
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        
        redirect($_SERVER['HTTP_REFERER']);
    }
}	
</pre>


<h3>application/config/config.php</h3><hr/>
<pre class="prettyprint">
$config['enable_hooks'] = TRUE;	
</pre>



<h3>application/hooks/LanguageLoader.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->lang->load('message','english');
        }
    }
}
</pre>


<h3>application/language/english/message_lang.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
$lang['welcome_message'] = 'welcome to way2programming.com';
</pre>


<h3>application/language/hindi/message_lang.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
$lang['welcome_message'] = 'way2programming.com मैं आपका स्वागत है ';
</pre>


<h3>in views file we can use</h3><hr/>
<pre class="prettyprint">
&lt;select onchange="javascript:window.location.href='&lt;?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
    &lt;option value="english" &lt;?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English&lt;/option>
    &lt;option value="hindi" &lt;?php if($this->session->userdata('site_lang') == 'hindi') echo 'selected="selected"'; ?>>Hindi&lt;/option>
&lt;/select>
&lt;p>&lt;?php echo $this->lang->line('welcome_message'); ?>&lt;/p>
</pre>
