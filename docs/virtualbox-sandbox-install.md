---
layout: docsdefault
title: Client installation
category: Getting started
order: 2
background: /img/docs.jpg
---
# Introduction


ELTMaestro sandbox virtual machine contains following applications
pre-installed.

-   ELTMaestro Server

-   ELTMaestro Hadoop Agent

-   Apache Hadoop with spark

Please note that this is **not an ideal configuration for production
use** and is intended for testing purposes only.

## Installation Requirements:


-   Oracle VirtualBox: Download and install latest version of Oracle
    VirtualBox from <https://www.virtualbox.org/>

-   ELTMaestro Sandbox Image for VirtualBox: Download the latest sandbox
    image from
    <https://s3.amazonaws.com/eltmaestro/ELTM_HD_SBX_VBOX.ova>

### Step1: Import Virtual Machine


-   Launch Oracle VirtualBox

<!-- -->

-   Click \[File\] -\> \[Import Appliance\]

![](/docs/sparkinstall_media/image1.png)
-   Browse/Select downloaded .ova file then click \[Next\]

![](/docs/sparkinstall_media/image2.png)

-   Click \[Import\]

![](/docs/sparkinstall_media/image3.png)

![](/docs/sparkinstall_media/image4.png)

### Step2: Configure Virtual Machine (don\'t launch VM yet)


-   Select VM and click \[Settings\]

![](/docs/sparkinstall_media/image5.png)

-   Select \[System\] on left panel

-   On \[Motherboard\] tab set base memory to 8192MB or higher

![](/docs/sparkinstall_media/image6.png)

-   On \[Processor\] tab set processor count to 4 (ideal) or higher.
    Recommended processor count is 4 but if your system only has 2 then
    set it to 2.

![](/docs/sparkinstall_media/image7.png)
-   Select \[Network\] on left panel

-   On \[Adapter 1\] tab check **\[Enable Network Adapter\]**

-   Set Attached to: **\[Bridged Adapter\]**

-   Set Name: \<Your network adapter name\> **(if you are on wifi
    connection select appropriate wifi device name)**

> *The adapter name is the name of network adapter your computer is
> using to connect to network(internet). If you are on wireless network,
> select appropriate wireless device name.*

-   Expand \[Advanced\]

-   Set MAC Address: **0800271FB789** **(Important!!)**

-   Set Check **\[Cable Connected\]**

-   Click \[OK\]

![](/docs/sparkinstall_media/image8.png)

-   Click \[Start\] to launch Virtual Machine

![](/docs/sparkinstall_media/image9.png)

-   On Virtual Machine Console

-   Note: Click anywhere on console to start using it. **Right-Ctrl key
    to get mouse control back.**

![](/docs/sparkinstall_media/image10.png)

-   Use following credentials to log in

-   User Name: hadoop

-   Password: welcome123

![](/docs/sparkinstall_media/image11.png)

-   Note down IP Address: 192.168.1.22 (your server ip address may be
    different than shown), this address may/may not change after
    rebooting. Note down the ip address if it changes after reboot

-   We will refer this IP Address as **SANDBOX\_IP\_ADDRESS** for
    remainder of documentation

### Step3: Begin Using Sandbox


*It may take few minutes after server has started for all applications
to initialize. A log file is updated when the services start during
startup. For debugging purpose you can check contents of log file*
**/tmp/sandbox.log**

*The last line on log file should contain* **\"\*\*\*\*\*\*\*\*\* Spark
Submit \[Found\]\"**

-   Launch ELTMaestro Windows Client application.

![](/docs/sparkinstall_media/image12.png)

-   Server: SANDBOX\_IP\_ADDRESS

-   Port: 8181

-   User Name: eltmaestro

-   Password: ELTMAESTRO

-   Click \[Login\] to start using ELTMaestro Client

Default SSH Credentials
-----------------------

  **User Name**   **Password**
  --------------- --------------
  root            welcome123
  hadoop          welcome123

You can use ssh client like Putty to connect to SANDBOX\_IP\_ADDRESS
using above credentials

Default ELTMaestro Windows Client Login
---------------------------------------

  |User Name  |  Password  |
  |--------------- --------------|
  |eltmaestro    |  ELTMAESTRO    |

Hadoop Web Access (Using Web Browser Like Chrome/FireFox)
---------------------------------------------------------

  |URL                          |   Type         |
  |----------------------------------|--------------------|
  |http://SANDBOX\_IP\_ADDRESS:50070/ |   Hadoop Service    |
  |http://SANDBOX\_IP\_ADDRESS:8088/  |  Hadoop Applications|
  |http://SANDBOX\_IP\_ADDRESS:50090/ |  Secondary Name Node|
  |http://SANDBOX\_IP\_ADDRESS:50075/ |  Data Node          |

Shut Down Procedure
-------------------

-   SSH Login as user \[root\]

-   Run Following Commands

> su - hadoop -c \"/home/hadoop/scripts/stop\_services.sh\"
>
> halt

Start Up Procedure
------------------

ELTMaestro and Hadoop related services are set to automatically start
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
