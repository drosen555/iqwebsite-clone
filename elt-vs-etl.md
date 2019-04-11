---
layout: defaultsecondary_md
title: ELT vs. ETL - The paradigm shift
description: Learn why ELT is the future of data warehousing and how it improves upon ETL.
background: /img/etl-server-farm2.jpg
featured-text: Beta program
secondary-text: Learn why ELT is the future of data warehousing and how it improves upon ETL.
---


# ETL: The way it's always been done
![](/img/eltvs/image1.png)

The picture above shows how data warehousing has been done for over 10 years.
Data is extracted from the sources, transformed into
the form needed for access by analysts, and then loaded in that
form to a location where it can be accessed.

A characteristic of the ETL architecture as shown above is that all
the action occurs in the center server. Both the sources on the left and the data
warehouse on the right are essentially passive *repositories*. All the
data movement, calculation, transformation, and rearranging are
carried out by the platform in the center -- the ETL server. When data
volume increases -- as it inevitably does -- the ETL server needs to get
more powerful, and requires more parallel processors, bigger network
pipes, and more complex, expensive software.

![Getting more expensive..](/img/eltvs/image2.png)
#### There is a glaring flaw in this architecture.
The data warehouse on the right cannot really be a passive repository. That's because when
analysts use the data warehouse, they will execute large queries.
Supporting those queries is computationally intensive. For that reason,
modern data warehouse platforms are powerful, special-purposes databases
that can support queries involving billions of rows per transaction.
Examples of modern data warehouse platforms include Amazon Redshift, IBM
Netezza, and Apache Spark.

![](/img/eltvs/image3.png)

Above is a pretty accurate picture of many existing production data
warehouse operations. But there is now an obvious problem with the picture
-- it shows massive duplication of resources. Two powerful servers are
each acting on the data, one after the other. In fact, not only are the
ETL server and the data warehouse platform both powerful servers, they
are both powerful servers *that specialize in performing the same operations.*
Namely, both are good at manipulating large relational datasets --
performing big joins on tables with billions of rows, for example.


# ELT: The paradigm shift

![](/img/eltvs/image4.png)

#### So why not eliminate the redundant server in the middle?
This is what led to the idea of ELT, which stands for Extract, Load, then Transform.
The ELT method simply loads the data from the sources into the data
warehouse platform unchanged, and then performs whichever transformation
is necessary  *inside the data warehouse platform.*

#### The advantages of this approach are clear.
The expense and complexity associated with the ETL server simply disappears.
When the data warehouse needs to scale up -- as, inevitably, it will --
there is no need to scale the ETL server along with it, because it is no
longer there. Since the cost of the entire system is now a fraction of
that represented by ETL, implementing a large data warehouse
is now possible even for small companies.
#### Why, then, is ELT not the method that drives most existing operations?
Because there is a stubborn obstacle that prevents people from transitioning.
That obstacle is that software programs for designing and running data
warehouses are made for the ETL world. To get to ELT,
developers would have to abandon tools like Informatica and DataStage,
and use whatever primitive and low level tools are available on the
data warehouse platforms themselves to do the work of extracting,
loading, and then transforming the data.

Our view is that this stubborn obstacle should be removed. We think that
inexpensive, easy-to-use tools for designing and running data warehouses
can and should be available directly on the data warehouse platforms
themselves. That's why we created ELTMaestro. The elegance and
simplicity of ELT should be the norm.
