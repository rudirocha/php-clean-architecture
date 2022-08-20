# PHP Clean Architecture

### Goal
Create an application boilerplate allowing an opinionated approach of a `Clean Architecture` using PHP.

## Getting started

Use this instructions to get thr project up and running.

### Required Software

*When running on Docker*:
- Docker and Docker Compose

### Using Docker

1. run `cp platform/.env-example platform/.env` 
2. run `docker compose -f platform/docker/compose.yaml up`
3. to stop and remove the containers `docker compose -f platform/docker/compose.yaml down`

## Overview

Implementing Clean Architecture design, allows the software business logic to be built independentely from it's delivery/exposure, as well as, reducing its own dependencies. By breaking down into several layers, and establishing a comunication flow between them, the application is better set for success when talking about scalability, testability, and maintenance. Clean Architecture was created in 2012 by Robert C. Martin, and this repository suggests one approach using PHP code and tools.

### Comply with the basic principles

- *Independent of external dependencies*
- *Independent of UI*: Any presentation layers, either by creating or updating actions, shouldn't create any impact to the application business logic. Using any embeded SPA, server-side template engine, should allow the business logic to work as always, and only this specific component to change.
- *Independent of database types*: What ever is the selected storage type, the application logic shouldn't be impacted.
- *Independent of frameworks*: The framework should be used as a tool, instead of the main driver. 
This is an important topic when designing an application implementing Clean Architecture using PHP. As the current state of the art regarding PHP is that frameworks (such as Symfony, Laravel, etc...) are adapting (very well) to become fully flexible to the application type an engineering team needs, the dev community is increasingly relying on this "all-in-one" project solutions. As an outcome, the engineering team is trying to fit the busines logic inside the framework lifecycle.
From Http request/response hadling, to model-in-database design, and even the whole testing suite are examples on how well the current frameworks allow us to deliver great software, but what if the subject under development is not a micro service but a medium size API?
- *Testable*: Right from the core layers must be tested even without any database dependencies, UI or other external components

### The layers

#### Domain
An abstract layer containing the core objects for the business logic to process. Are part of this layer `entities`, `constants`, `enums`, `exceptions`, etc...
