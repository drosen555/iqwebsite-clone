---
layout: docsdefault
title: Integrator Documentation
description: Find information about using and setting up Integrator
background: /img/docs.jpg
featured-text: Integrator Documentation
secondary-text: Find information about using and setting up Integrator
---

# Overview


<h2 class = "logo-red">Note on completeness </h2>
This online documentation is currently being converted from an older pdf version and is incomplete. To see the existing and complete pdf documentation, [click here.](/docs/Integrator_User_Manual_Spark.pdf)

## Quick Start
Want to try Integrator as quick as possible? Try out our spark version in the sandbox available for download [here](/try-a-sandbox).
## Introduction
Integrator is a software solution that helps with data integration and building data warehouses on powerful platforms such as IBM PureData for Analytics (Netezza), Amazon RedShift, and Apache Spark.

## Integrator concepts


#### Job
 A job is a reusable component that does some defined work.  A single job may read from one or more data sources and write to one or more targets.  In most cases, the processing within a job is atomic and consistent, meaning the job as a whole will either completely succeed or fail.  Data will either be committed or rolled back to its pre-job state based on job success or failure.  In either case, the Integrator engine will clean up and remove all temporary tables and other intermediate processing artifacts.

![What jobs look like](/img/docs/jobs.png)
#### Batch
 A batch is a collection of jobs that are run together.  The batch defines the order in which the component jobs are run.  Jobs within a batch are connected by a graph which illustrates how control flow passes from job to job.

![ELT spelled with Integrator](/img/docs/elt.png)
#### Workflow
 We use the term workflow to refer to jobs or batches. A workflow can execute multiple network of workflows and can have infinite hierarchy.

![Nested Workflows](/img/docs/nestedworkflows.png)
#### Step
 Just as jobs are the components of batches, steps are the components of jobs.  Consider the following example: A job might extract data from two tables, combine the two datasets, massage the data into the form required by a target table, and then load the data to the target.  Such a job might be composed of the following operations: (1) Extract the data from the first source, (2) extract data from the second source, (3) join the two datasets, and (4) load the resulting dataset into the target table.  Such a job would be composed of four steps, as shown below.
