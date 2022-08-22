# PHP Clean Architecture

### Overview
Implementing Clean Architecture design, allows the software business logic to be built independentely from it's delivery/exposure, as well as, reducing its own dependencies. By breaking down into several layers, and establishing a comunication flow between them, the application is better set for success when talking about scalability, testability, and maintenance. Clean Architecture was created in 2012 by Robert C. Martin, and this repository suggests one approach using PHP code and tools.

*The Goal* 
Create an application boilerplate allowing an opinionated approach of a `Clean Architecture` using PHP.

*Why?*
When working with C# and .Net, right from the start we're used to segregating the application into multiple layers. The DAL (Data Access Layer) and the BAL (Business Access Layer) are examples of that. The application structure starts to be designed right on the moment an empty `solution` is created followed by the creation of each project with its own defined scope. Each project has also an important configuration step, by defining which compiled outcome is expected to be produced, `.Net Standard 2.*` vs `.Net Core`, so the engineering team can define how generic those `DLL` are meant to be (and how portable between .Net versions they are meant to be).
One great example of a `Clean Architecture` with `.Net Core` belongs to [Json Taylor](https://github.com/jasontaylordev/CleanArchitecture). In the linked `Github` repository we can find a `.Net Core 6` solution template. The code is organised into several layers, in the chape of `.Net Core` projects, in which the right dependencies flow is established.

What about PHP? 
One key fact: `We are used to create a project using a well known framework, and organise the code inside of it`. Because we rely purely on the framework lifecycle we may end up with:
- a huge codebase with many duplicated code and dependencies.
- many violations of code principles.
- increased `tech debt` if the focus is only on growing the number of features inside the codebase
- difficulty upgrading external dependencies (packages or framework version), given the business logic is spread in the same main parent folder
- testing becomes dependent of the used framework.

What if we could reduce the dependencies between components on a PHP project? Although the latest PHP Frameworks offer great flexibility, modularisation, and version upgrade support, what if we protect the application's business logic in a way that everything external we need to import is detached from our core logic, consumes our core logic, and is hidden from our core logic?
Let's try to create an approach.

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

Questions while designing this layer:
- should this project contain the unit tests? Or should it be an independent project?
    - if this is part of the same project: its easy to manage the new code, but logic is at the same parent folder as tests 
    - If its separate: how does composer ensure the link between both projects? Will composer require to autoload / update each time a new update happens?


## Getting started with this repo

Use this instructions to get the project up and running.

### Required Software

*When running on Docker*:
- Docker and Docker Compose

### Using Docker

1. run `cp platform/.env-example platform/.env` 
2. run `docker compose -f platform/docker/compose.yaml up`
3. to stop and remove the containers `docker compose -f platform/docker/compose.yaml down`

#### Tips for Docker usage
- PHP extensions management inside the `php` container: `docker-php-ext-install`,  `docker-php-ext-enable`, and  `docker-php-ext-configure`
- Run `composer install` from the host `docker run --rm -it -v "$(pwd):/app" composer/composer install --working-dir=<TARGET DIR TO RUN INSTALLER>`

## Backlog
- [ ] Implement Domain and Application Layer + documentation
- [ ] Implement Domain and Application Layer Tests :: as part of the same folder in `src` or under tests? >> Document it
    - [ ] When under `tests` which version should be defined: `dev-main` vs `x.y.z`
- [ ] Implement Web / Presentation Layer + documentation
- [ ] Implement Persistance layer + documentation
- [ ] Add Test coverage reports
- [ ] Document Platform folder >> Why including it
- [ ] Add k8s