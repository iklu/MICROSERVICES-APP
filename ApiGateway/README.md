Microservices Environment


1. API creates event user.activated and sends it to RabbitMQ
2. RabbitMQ forwards the event to all subscribed applications
   In this case, ther are multiple instances of Scheduler(cron jobs, etc), so it selects one in round-robin fashion.
3. The Scheduler instance creates task scheduler.container.create and sends it ot RabbitMQ 
4. RabbitMQ then selects a Scheduler insatnce (again using round-robin) to receive the task.

Transaction IDs
One thing that has helped us debug and provide introspection into our event system are Transaction IDs (TID). Each job we send out to RabbitMQ is prepended with a TID. If this job was the result of an event or task, then it uses the same TID. If the job isn’t created from an event or task, we generate a new TID. This helps us track which events causes which tasks to run.
Our event-driven system has sped up our development, made us more resilient to failures, and has improved our product’s responsiveness for our users. We hope these techniques will help your product scale as well.
