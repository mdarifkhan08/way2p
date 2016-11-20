			<h3>Controller Class</h3>
			<pre class="prettyprint">
@RequestMapping(value = "download.do1", method = RequestMethod.GET)
	public void downloadnotepadfile(HttpServletRequest request,
			HttpServletResponse response) {
		String filename = "resources/download/SpringFirstApp.rar";
		try {
			String path = request.getSession().getServletContext()
					.getRealPath("");
			File f = new File(path + "//" + filename);

			response.setContentType("application/rar");
			response.setContentLength(new Long(f.length()).intValue());
			
			//intValue() is a method of Integer class and it will return int
			
			//length() is also provide int value as return type
			
			//length method is used to provide length of sequence of character in int
			
			//Content-Disposition is the part of the Hypertext transfer protocol
			
			
			/*
			 * In addition to defining the HTTP/1.1 protocol, this document
			 * serves as the specification for the Internet media type
			 * "message/http" and "application/http". The message/http type can
			 * be used to enclose a single HTTP request or response message,
			 * provided that it obeys the MIME restrictions for all "message"
			 * types regarding line length and encodings. The application/http
			 * type can be used to enclose a pipeline of one or more HTTP
			 * request or response messages (not intermixed).
			 */
			response.setHeader("Content-Disposition",
					"attachment; filename=SpringFirstApp.rar");
			FileCopyUtils.copy(new FileInputStream(f),response.getOutputStream());
			
			//copy method is available in static class called FileCopyutils
			//and we already know that to call the static class method we can use the class name to access it.
					

		} catch (Exception e) {

			e.printStackTrace();

		}
			
            </pre>

			
			
			
			<h3>jsp file</h3>
			<pre class="prettyprint">
&lt;a href="download.do1">Download&lt;/a>
            </pre>