<div class="alert alert-info">
	first we need to create the directory/folder <mark>upload_videos</mark>
    and we will check we used jquery validation so that we required that files also, that we can get using internet.
</div>


<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
if (isset ( $_POST ['upd'] )) &#123;
	
	$target_dir = "upload_videos/";
	
	$maxsize = 25000000;
	
	$target_file = $target_dir . basename ( $_FILES ["fileToUpload"] ["name"] );
	
	$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
	
	$fileTmpLoc = $_FILES ["fileToUpload"] ["tmp_name"];
	
	if ($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg") &#123;
		header ( 'Location: index.php?report=file_format' );
	} 
	
	else &#123;
		move_uploaded_file ( $fileTmpLoc, $target_file );
	     }
}
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="jquery.validate.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function() &#123;
    $("#videoUpload").validate(&#123;
        rules: &#123;
        	fileToUpload:&#123;required: true},
        },
        messages: &#123;
        	fileToUpload:"Please Select File To Upload",
        },
        submitHandler: function(form) &#123; // &lt;- pass 'form' argument in
            form.submit(); // &lt;- use 'form' argument here.
        }
    });
});

function checkSize(max_img_size)
&#123;
    var input = document.getElementById("upload");
    // check for browser support (may need to be modified)
    if(input.files && input.files.length == 1)
    &#123;           
        if (input.files[0].size > max_img_size) 
        &#123;
            alert("The file must be less than "+ max_img_size/1024/1024 +"MB");
            return false;
        }
    }
    return true;
}
&lt;/script>
&lt;/head>
&lt;body>
	&lt;form action="" method="POST" onsubmit="return checkSize(26214400)"
		id="videoUpload" enctype="multipart/form-data" style="padding: 25px;">
		
		&lt;input type="file" name="fileToUpload" class="form-control"
			id="upload" /> &lt;br /> 
			
			&lt;input type="submit" value="Uplaod Video"
			name="upd" class="btn" />
	&lt;/form>
&lt;/body>
&lt;/html>
</pre>
