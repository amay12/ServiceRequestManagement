# Service Request Management
>  Application that helps in restoring normal service operation by managing all the aspects of service requests from creation to their resolution and closure.

## Table of contents
* [General Information](#general-information)
* [Technologies Used](#technologies-used)
* [Deploy the project locally](#deploy-the-project-locally)
* [Contact](#contact)

## General Information

The primary goal of the Service Request management process is to restore normal service operation as quickly as possible with minimum disruption to the business, ensuring that the best achievable levels of availability and service are maintained.

### The application helps to achieve the following objectives:
* Service requests are properly logged.
* Service requests are properly routed.
* Service request status is accurately reported.
* Service requests are accurately sized with regard to effort and cost. 
* Queue of unfulfilled requests is visible and reported.

### The application supports following user roles:
* Super Administrator: Can create and manage users, companies, company administrators, feedbacks and queries.
* Company Administrators: Can create end-user accounts, resolvers and resolver groups, and allocators. 
The functions performed are:<br/>
&nbsp;&nbsp;1. Client Creation
<br/>&nbsp;&nbsp;2. Product Creation
<br/>&nbsp;&nbsp;3. Default Group Creation 
<br/>&nbsp;&nbsp;4. Client - Product Linking
* Allocators: Can allocate the reports of users to different resolvers or resolver groups.
* Resolvers (Priority Groups: R1, R2, R3): Can handle individual complaints as well as their assigned group complaints. Resolvers can also:
<br/>&nbsp;&nbsp;1. Resolve a Complaint.
<br/>&nbsp;&nbsp;2. Escalate a Complaint.
<br/>&nbsp;&nbsp;3. Convert a Pending or On-Hold Complaint to an In-process complaint.
* End Users : Can request their grievances and track their reports. The report tracking system tells the status i.e. pending, in-process, on-hold, resolved or escalated, the name of resolver resolving the issue, date and time of the raised issue, issue number, product name, product category and subject.

## Technologies Used:
* CodeIgniter PHP
* MySQL DB
* Bootstrap
* JavaScript/ HTML/ CSS

## Deploy the project locally
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

* Download the project:
	Clone this repository to your machine.
  Navigate to an empty directory.
  In command prompt:
		
> git clone https://github.com/amay12/ServiceRequestManagement.git

* Install PHP CodeIgniter on your server:
	Install the latest version of [CodeIgniter](https://codeigniter.com/user_guide/installation/index.html).

* Create and initialize the database.
	
* Start a local PHP web server(eg. XAMPP) and place code files from this project to the CodeIgniter's location on your server.

## Contact
Created by [@AmayKadre](http://linkedin.com/in/amaykadre/) - feel free to contact me!
