<h3>AppConfig.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.config;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import com.way2p.pojo.Address;
import com.way2p.pojo.Student;

public class AppConfig {
	public static void main(String args[]) {

		Configuration cfg = new Configuration();
		cfg.configure("com/way2p/config/hibernate.cfg.xml");
		cfg.addAnnotatedClass(com.way2p.pojo.Address.class);
		cfg.addAnnotatedClass(com.way2p.pojo.Student.class);
		SessionFactory factory = cfg.buildSessionFactory();
		Session session = factory.openSession();

		Student s = new Student();
		s.setSid(1);
		s.setSname("XYZ");

		Address ad = new Address();
		ad.setSid(1);
		ad.setCity("xyz");
		ad.setState("xyz");
		ad.setPlace("xyzs");
		ad.setStudentIsParent(s);

		Transaction tx = session.beginTransaction();
		session.save(ad);
		session.getTransaction().commit();
		session.close();
		
		factory.close();
	}
}
	
</pre>

<h3>hibernate.cfg.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
	&lt;session-factory>
		&lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
		&lt;property name="connection.url"> jdbc:mysql://localhost/123df&lt;/property>
		&lt;property name="connection.username">root&lt;/property>
		&lt;property name="connection.password">&lt;/property>
		&lt;!-- Mysql dialect -->
		&lt;!-- &lt;property name="dialect">org.hibernate.dialect.H2Dialect&lt;/property> -->
		&lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
		&lt;property name="show_sql">true&lt;/property>
		&lt;property name="hbm2ddl.auto">update&lt;/property>
		
	&lt;/session-factory>
&lt;/hibernate-configuration>	
</pre>



<h3>Student.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.pojo;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="students")
public class Student {
	@Id
	@Column(name="sid")
	private int sid;
	@Column(name="sname")
	private String sname;
	/**
	 * @return the sid
	 */
	public int getSid() {
		return sid;
	}
	/**
	 * @param sid the sid to set
	 */
	public void setSid(int sid) {
		this.sid = sid;
	}
	/**
	 * @return the sname
	 */
	public String getSname() {
		return sname;
	}
	/**
	 * @param sname the sname to set
	 */
	public void setSname(String sname) {
		this.sname = sname;
	}
	

}
	
</pre>



<h3>Address.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.pojo;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name = "address")
public class Address {
	@Id
	@Column(name = "sid")
	private int sid;
	@Column(name = "city")
	private String city;
	@Column(name = "state")
	private String state;
	@Column(name = "place")
	private String place;
	@OneToOne(targetEntity = Student.class, cascade = CascadeType.ALL)
	@JoinColumn(name = "stuid", referencedColumnName = "sid")
	private Student studentIsParent;

	/**
	 * @return the sid
	 */
	public int getSid() {
		return sid;
	}

	/**
	 * @param sid
	 *            the sid to set
	 */
	public void setSid(int sid) {
		this.sid = sid;
	}

	/**
	 * @return the city
	 */
	public String getCity() {
		return city;
	}

	/**
	 * @param city
	 *            the city to set
	 */
	public void setCity(String city) {
		this.city = city;
	}

	/**
	 * @return the state
	 */
	public String getState() {
		return state;
	}

	/**
	 * @param state
	 *            the state to set
	 */
	public void setState(String state) {
		this.state = state;
	}

	/**
	 * @return the place
	 */
	public String getPlace() {
		return place;
	}

	/**
	 * @param place
	 *            the place to set
	 */
	public void setPlace(String place) {
		this.place = place;
	}

	/**
	 * @return the studentIsParent
	 */
	public Student getStudentIsParent() {
		return studentIsParent;
	}

	/**
	 * @param studentIsParent
	 *            the studentIsParent to set
	 */
	public void setStudentIsParent(Student studentIsParent) {
		this.studentIsParent = studentIsParent;
	}

}
	
</pre>



