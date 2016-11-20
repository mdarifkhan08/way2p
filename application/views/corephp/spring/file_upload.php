			<h3>create controller post method</h3>
			<pre class="prettyprint">
private static final long serialVersionUID = 1L;

	private static final String DATA_DIRECTORY = "data";
	private static final int MAX_MEMORY_SIZE = 1024 * 1024 * 2;
	private static final int MAX_REQUEST_SIZE = 1024 * 1024;

	@RequestMapping(value = "UploadServlet", method = RequestMethod.POST)
	public String UploadServlet(HttpServletRequest request,
			HttpServletResponse response) throws ServletException, IOException {

		// Check that we have a file upload request
		boolean isMultipart = ServletFileUpload.isMultipartContent(request);

		// Create a factory for disk-based file items
		DiskFileItemFactory factory = new DiskFileItemFactory();

		// Sets the size threshold beyond which files are written directly to
		// disk.
		factory.setSizeThreshold(MAX_MEMORY_SIZE);

		// Sets the directory used to temporarily store files that are larger
		// than the configured size threshold. We use temporary directory for
		// java
		factory.setRepository(new File(System.getProperty("java.io.tmpdir")));

		// constructs the folder where uploaded file will be stored
		String uploadFolder = request.getSession().getServletContext()
				.getRealPath("")
				+ File.separator + DATA_DIRECTORY;

		// Create a new file upload handler
		ServletFileUpload upload = new ServletFileUpload(factory);

		// Set overall request size constraint
		upload.setSizeMax(MAX_REQUEST_SIZE);

		try {
			// Parse the request
			List items = upload.parseRequest(request);
			Iterator iter = items.iterator();
			while (iter.hasNext()) {
				FileItem item = (FileItem) iter.next();

				if (!item.isFormField()) {
					String fileName = new File(item.getName()).getName();
					String filePath = uploadFolder + File.separator + fileName;
					File uploadedFile = new File(filePath);
					System.out.println(filePath);
					// saves the file to upload directory
					item.write(uploadedFile);
				}
			}

		} catch (FileUploadException ex) {
			throw new ServletException(ex);
		} catch (Exception ex) {
			throw new ServletException(ex);
		}

		return "SpringMvc/uploadFile/done";
	}	      
            </pre>

			
			
			
			<h3>upload.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
       pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>File Upload&lt;/title>
&lt;/head>
&lt;body>
&lt;form method="post" action="UploadServlet" enctype="multipart/form-data">
Select file to upload:
&lt;input type="file" name="dataFile" id="fileChooser"/>&lt;br/>&lt;br/>
&lt;input type="submit" value="Upload" />
&lt;/form>
&lt;/body>
&lt;/html>	
            </pre>

			
			
			<h3>done.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Upload Done&lt;/title>
&lt;/head>
&lt;body>
&lt;h3>Your file has been uploaded!&lt;/h3>
&lt;/body>
&lt;/html>	
            </pre>