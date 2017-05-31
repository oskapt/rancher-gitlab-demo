This is a container designed for a demonstration of container services 
within [Rancher](http://www.rancherlabs.com). It's not much more than a 
Hello World container, but it does provide the following:

* Use `/health.php` for health checking from your load balancer
* `touch down` to return a 503 from `/health.php`, effectively removing the 
service from operation
* Set an environment variable called `DEMO_VAR` to have that shown 
dynamically by `/index.php`. You can use when demonstrating container 
upgrades to show that the container really _was_ upgraded.


