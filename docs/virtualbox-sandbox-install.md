---
layout: docsdefault
title: Client installation
category: Getting started
order: 2
background: /img/docs.jpg
---
# Introduction
The Integrator sandbox software requires two components to function: the Windows-based client to manipulate your data and the server (running inside the sandbox) to execute your query.

The Integrator virtual machine contains following applications
pre-installed.

-   Integrator Server

-   Integrator Hadoop Agent

-   Apache Hadoop with spark

The Windows Client is installed separately.

Please note that this is **not an ideal configuration for production
use** and is intended for testing purposes only.

## Installation Prerequisites:
1. [Oracle VirtualBox](https://www.virtualbox.org/) Used to run the Integrator sandbox

2. [Integrator Sandbox Image for VirtualBox](/try-a-sandbox/) The Integrator sandbox environment.

3. [Integrator Windows Client](/try-a-sandbox/) Used to interact with the Integrator server.





## Part 1: Client Installation

- Launch the installer

- Click run on the security window. (Your security window may look different from the one below, but in general, you will receive a warning that the software is unsigned, and an option to install it anyway.)  Since this is a beta, and development is proceeding rapidly, the client will be unsigned until release.  

![](/docs/sparkinstall_media/imagea.png)


 - Complete the installer

![](/docs/sparkinstall_media/imageb.png)



## Part 2: VirtualBox

- Install VirtualBox from the link provided.


-   Launch Oracle VirtualBox

<!-- -->

-   Click \[File\] -\> \[Import Appliance\]

![](/docs/sparkinstall_media/image1.png)
-   Browse/Select downloaded .ova file then click \[Next\]

![](/docs/sparkinstall_media/image2.png)

-   Click \[Import\]

![](/docs/sparkinstall_media/image3.png)

![](/docs/sparkinstall_media/image4.png)

### Step2: Before launch: Configure Virtual Machine **Required**
-   Select VM and click \[Settings\]

![](/docs/sparkinstall_media/image5.png)

-   Select \[System\] on left panel

-   On \[Motherboard\] tab set base memory to 8192MB or higher.  (If your computer doesn't have enough RAM for you to set the base memory to 8192MB, set it as high as possible.  4096MB will probably work, below that, things get iffy.)

![](/docs/sparkinstall_media/image6.png)

-   On \[Processor\] tab set processor count to 4 (ideal) or higher.
    Recommended processor count is 4 but if your system only has 2 then
    set it to 2.

![](/docs/sparkinstall_media/image7.png)


-   Click \[Start\] to launch Virtual Machine

![](/docs/sparkinstall_media/image9.png)

-   On Virtual Machine Console

-   Note: Click anywhere on console to start using it. **Right-Ctrl key
    to get mouse control back.**

![](/docs/sparkinstall_media/virtual-machine-console.jpg)


### Step3: Begin Using Sandbox


*It may take few minutes after server has started for all applications
to initialize. A log file is updated when the services start during
startup. For debugging purpose you can check contents of log file*
**/tmp/sandbox.log**

*The last line on log file should contain* **\"\*\*\*\*\*\*\*\*\* Spark
Submit \[Found\]\"**

-   Launch Integrator Windows Client application.

![](/docs/sparkinstall_media/sandbox-login.jpg)

-   Server: localhost

-   Port: 8181

-   User Name: eltmaestro

-   Password: ELTMAESTRO

-   Click \[Login\] to start using Integrator Client

Default SSH Credentials
-----------------------

|User Name  | Password  |
|--------------- |--------------|
|root            | welcome123   |
|hadoop          | welcome123   | 

You can use ssh client like Putty to connect to the sandbox by connecting to localhost on port 2222
using above credentials

Default Integrator Windows Client Login
---------------------------------------

  |User Name  |  Password  |
  |--------------- --------------|
  |eltmaestro    |  ELTMAESTRO   |

Hadoop Web Access (Using Web Browser Like Chrome/FireFox)
---------------------------------------------------------

  |URL                          |   Type         |
  |----------------------------------|--------------------|
  |http://localhost:50070/ |  Hadoop Service    |
  |http://localhost:8088/  |  Hadoop Applications|
  |http://localhost:50090/ |  Secondary Name Node|
  |http://localhost:50075/ |  Data Node          |

Shut Down Procedure
-------------------

-   SSH Login as user \[root\]

-   Run Following Commands

> su - hadoop -c \"/home/hadoop/scripts/stop\_services.sh\"
>
> halt

Start Up Procedure
------------------

Integrator and Hadoop related services are set to automatically start
when Sandbox Virtual Machine reboots. It may take few minutes for all
services to come online after server has been started.

Sample DVD Rental Database
--------------------------

-   This database comes pre-installed on sandbox postgresql database
    system which is sourced from
    <http://www.postgresqltutorial.com/postgresql-sample-database/>

-   ER Model for this database is available at
    <http://www.postgresqltutorial.com/wp-content/uploads/2018/03/printable-postgresql-sample-database-diagram.pdf>

-   A pre-designed workflow called LOAD\_ACTORS copies table \[actors\]
    from postgresql into hadoop.

-   A pre-configured onstage jdbc connection
    DVD\_RENTAL\_DATABASE\_LOCAL is available to load into hadoop.
