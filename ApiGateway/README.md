Microservices Environment


1. API creates event user.activated and sends it to RabbitMQ
2. RabbitMQ forwards the event to all subscribed applications
   In this case, ther are multiple instances of Scheduler(cron jobs, etc), so it selects one in round-robin fashion.
3. The Scheduler instance creates task scheduler.container.create and sends it ot RabbitMQ 
4. RabbitMQ then selects a Scheduler insatnce (again using round-robin) to receive the task.

Transaction IDs
One thing that has helped us debug and provide introspection into our event system are Transaction IDs (TID). Each job we send out to RabbitMQ is prepended with a TID. If this job was the result of an event or task, then it uses the same TID. If the job isn’t created from an event or task, we generate a new TID. This helps us track which events causes which tasks to run.
Our event-driven system has sped up our development, made us more resilient to failures, and has improved our product’s responsiveness for our users. We hope these techniques will help your product scale as well.


1
Server-Side service registry discovery in case with HTTP protocol

https://auth0.com/blog/an-introduction-to-microservices-part-3-the-service-registry/

2
Event driven communication with subscribers in case of AMQP protocol
it allows a “Publisher/Producer” to send a message and allows for a “Consumer” to listen for those messages.
Event-based and asynchronous

What we can do is have the parser program emit an event ("soccer.mls.goal" for example), along with its accompanying information:
{
  league: 'MLS',
  team: 'Toronto FC',
  player: 'Sebastian Giovinco',
  opponent: 'New York City FC',
  time: '14:21'
}

The parser can then forget about it! It’s done its work of emitting the event. The rest of the work will be done by any number of consumers who have subscribed to this specific event.

The 'live_events' string has to do with which Exchange to publish the event to. An Exchange is basically like a router that decides which Queue(s) the event should be placed into. The emit method is inside of a Module I created to simplify emitting events:


Communication patterns amqp
https://content.pivotal.io/blog/messaging-patterns-for-event-driven-microservices


2) Asynchronous Command Calls

Composing microservices atomic calls into complex flows often requires proper orchestration over asynchronous actions. These are usually local integration use cases, connecting related microservices that must exchange messages with a delivery guarantee. The messaging layer in this use case has substantially different needs from an event firehose, since its messages are point-to-point (queues instead of topics). This usually requires a delivery guarantee and most are short-lived (albeit still asynchronous), conversational. It's a traditional broker-centric use case, reliably connecting endpoints through asynchronous communication. The communication flows through atomic messages exchanged between parties, instead of a constant stream of events potentially handled by multiple processes.

This pattern is better implemented by a lightweight messaging platform such as RabbitMQ, as described by Martin Fowler. RabbitMQ scales incredibly well with a small system footprint and doesn't require the consumer application to control the messaging consumption state like Kafka. It powers some of the world's largest scale use cases, like Instagram's feed.  

However, RabbitMQ's hidden secret for integrating microservices in a cloud-native architecture is the Pivotal Cloud Foundry service broker and tile. Certainly one of the most neglected fundamental characteristics of microservices architectures is infrastructure automation, or the ability to fully and repeatedly build, deploy and operate microservices through continuous delivery pipelines. The Pivotal Cloud Foundry tile for RabbitMQ allows automated install, updates and scaling for multiple cloud environments and can be fully integrated into continuous delivery tools so you can focus on building software and not automating services.

As with Kafka, RabbitMQ is one of the standard transports (binders) for SCDF. Users can use SCDF's visual design to create integration pipelines that fully abstract the underlying messaging implementation, while leveraging RabbitMQ's performance, scalability, and reliability.