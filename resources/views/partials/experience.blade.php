@vite('resources/css/experience.css')
<section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
          <x-experience.container title="Frontend development">
              <x-experience.element title="Html" />
              <x-experience.element title="CSS" />
              <x-experience.element title="JavaScript" />
              <x-experience.element title="JQuery" />
              <x-experience.element title="ThreeJs" />

          </x-experience.container>


          <x-experience.container title="devops">
              <div class="experience-section">

                  <x-experience.element title="Windows" />
                  <x-experience.element title="Linux" />
              </div>
              <div class="experience-section">

                  <x-experience.element title="Bash" />
                  <x-experience.element title="PowerShell" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="Gitlab actions" />
                  <x-experience.element title="Github action" />
              </div>
              <div class="experience-section">

                  <x-experience.element title="Nginx" />
              </div>

              <div class="experience-section">
                  <x-experience.element title="Docker" />
              </div>


              <div class="experience-section">
                  <x-experience.element title="Ansible" />
              </div>

              <div class="experience-section">
                  <x-experience.element title="Load Balancing" />
              </div>


          </x-experience.container>



          <x-experience.container title="Backend development">
              <div class="experience-section">

                  <x-experience.element title="PHP" />
                  <x-experience.element title="JavaScript" />
                  <x-experience.element title="TypeScript" />
              </div>



              <div class="experience-section">

                  <x-experience.element title="Laravel" />
                  <x-experience.element title="Node" />
                  <x-experience.element title="Express" />
                  <x-experience.element title="Nest" />
              </div>
              <div class="experience-section">

                  <x-experience.element title="MySQL" />
                  <x-experience.element title="Postgres" />
                  <x-experience.element title="MogoDB" />
                  <x-experience.element title="Redis" />
              </div>
              <div class="experience-section">

                  <x-experience.element title="Prisma" />
                  <x-experience.element title="Mongoose" />
                  <x-experience.element title="Laravel ORM," />
              </div>

              {{--  --}}
              <div class="experience-section">

                  <x-experience.element title="OOP" />
                  <x-experience.element title="AOP" />
                  <x-experience.element title="design patterns." />
                  <x-experience.element title="SOLID" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="MVC" />
                  <x-experience.element title="Modular" />
                  <x-experience.element title="microservices" />
                  <x-experience.element title="Monorepo" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="HTTP" />
                  <x-experience.element title="gRPC" />
                  <x-experience.element title="Message brokers " />
              </div>



              <div class="experience-section">

                  <x-experience.element title="Plan Driven" />
                  <x-experience.element title="Agile Methodologies" />
              </div>


              <div class="experience-section">

                  <x-experience.element title="Jira" />
                  <x-experience.element title="ClickUp" />
              </div>

              {{--  --}}

              <div class="experience-section">

                  <x-experience.element title="jQuery" />
                  <x-experience.element title="socker.io" />
                  <x-experience.element title="apollo" />
                  <x-experience.element title="puppeteer" />
              </div>



              <div class="experience-section">

                  <x-experience.element title="Spatie" />
                  <x-experience.element title="maatwebsite/excel" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="WebRTC" />
                  <x-experience.element title="Web socket" />
                  <x-experience.element title="pusher" />
              </div>


              <div class="experience-section">

                  <x-experience.element title="REST" />
                  <x-experience.element title="GraphQL" />
              </div>


              <div class="experience-section">

                  <x-experience.element title="Google Drive" />
                  <x-experience.element title="Firebase" />
                  <x-experience.element title="Gmail" />
              </div>


              <div class="experience-section">

                  <x-experience.element title="Rabbit-mq" />
                  <x-experience.element title="redis" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="Familiar with Git branching strategies,including GitFlow" />
              </div>



              <div class="experience-section">

                  <x-experience.element title="Nginx" />
              </div>

              <div class="experience-section">

                  <x-experience.element title="XSS" />
                  <x-experience.element title="CSRF" />
                  <x-experience.element title="SQL Injection," />
                  <x-experience.element title="Directory Traversal" />
                  <x-experience.element title="and other web vulnerability prevention techniques" />
              </div>


              <div class="experience-section">
                  <x-experience.element title="Database optimization" />
              </div>

              <div class="experience-section">
                  <x-experience.element title="RESTful API development and maintenance" />
              </div>



              <div class="experience-section">
                  <x-experience.element title="Cross-Team Collaboration" />
              </div>

              <div class="experience-section">
                  <x-experience.element title="Unit test & Integration test" />
              </div>



          </x-experience.container>


      </div>

      <x-utils.arrow-move :to="'./#work-projects'"></x-utils.arrow-move>
  </section>
