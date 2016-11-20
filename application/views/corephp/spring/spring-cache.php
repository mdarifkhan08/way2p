<div class="panel panel-primary">
<div class="panel panel-heading">
Idea of cache
</div>
<div class="panel panel-body">
The idea is to cache the returned value of a method for a given input, and for any further request with same input, return the result from cache without even executing the method, thus reducing the number of executions.

Spring Caching is still an abstraction [not a cache implementation] and requires an actual implementation in order to store the cache data.

</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
Implementation of Spring Cache are
</div>
<div class="panel panel-body">
 EhCache <br/>
 Gemfire cache<br/>
 Guava caches <br/>
</div>
</div>

<div class="panel panel-primary">
<div class="panel panel-heading">
Caching Annotations
</div>
<div class="panel panel-body">
<pre>
@Cacheable : triggers cache population
@CacheEvict : triggers cache eviction
@CachePut : updates the cache without interfering with the method execution
@Caching : regroups multiple cache operations to be applied on a method
@CacheConfig : shares some common cache-related settings at class-level
</pre>
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<pre>
org.springframework.cache.Cache & org.springframework.cache.CacheManager are the main abstractions provided by Spring.

implementations of that abstraction are JDK java.util.concurrent.ConcurrentMap based caches, EhCache, Gemfire cache, Caffeine, Guava caches
</pre>
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<pre>
cache based on JDK ConcurrentMap which is enough for simple use cases but does not support the persistence or eviction policy.

For an enterprise solution, Ehcache is the preferred choice, providing advanced features.
</pre>
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
Maven Dependency For Ehcache
</div>
<div class="panel panel-body">
<pre>
&lt;dependency>
    &lt;groupId>net.sf.ehcache&lt;/groupId>
    &lt;artifactId>ehcache&lt;/artifactId>
    &lt;version>2.10.2.2.21&lt;/version>
&lt;/dependency>
</pre>
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<pre>

</pre>
</div>
</div>
