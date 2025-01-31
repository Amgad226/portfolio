<style>
  /* body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  } */

  #projects {
    /* width: 100vw; */
    min-height: 100vh;
    /* padding: 20px; */
    box-sizing: border-box;
  }

  .projects {
    /* width: 100%; */
    /* max-width: 1200px; */
    /* margin: 0 auto; */
  }

  .projects h1 {
    font-size: 3rem;
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .project-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 20px 0;
    padding: 40px 20px;
    /* background-color: #e3f2fd; */
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    gap: 20px;
  }

  .project-item:nth-child(odd) {
    /* background-color: #f1f8e9; */
    flex-direction: row-reverse;
  }

  .project-image {
    flex: 0 0 150px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #ffffff;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .project-image img {
    max-width: 100%;
    height: auto;
  }

  .project-text {
    flex: 1;
    margin: 0 20px;
  }

  .project-text h2 {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #00796b;
  }

  .project-text p {
    margin-bottom: 20px;
    line-height: 1.6;
    color: #555;
  }

  .project-text a {
    text-decoration: none;
    font-weight: bold;
    color: #0288d1;
    transition: color 0.3s;
  }

  .project-text a:hover {
    color: #01579b;
  }

  @media (max-width: 768px) {
    .project-item {
      flex-direction: column;
    }

    .project-item:nth-child(odd) {
      flex-direction: column;
    }

    .project-image {
      margin-bottom: 20px;
    }
  }
</style>
<section>

  <div id="projects">
    <div class="projects">
    <h1>Work Experience</h1>
    <div class="project-item">
      <div class="project-image">
        <img src="./assets/scendinavia-tech.png" alt="Project Image">
      </div>
      <div class="project-text">
        <h2>Scendinavia Tech</h2>
        <p>Contributed to the development of the Copax fleet management system, optimizing vehicle and driver performance through telematics
          technology.
          Implemented key features including real-time GPS tracking, fuel management, and performance monitoring.
          Developed and maintained backend services using TypeScript, NestJS in a microservices architecture.
          Worked collaboratively in an agile environment using ClickUp for project management and task tracking.
          Focused on building scalable and high-performance backend solutions to support the system's telematics and data analysis features.</p>
          <a href="#">View Project</a>
        </div>
      </div>
      <div class="project-item">
        <div class="project-image">
          <img src="./assets/pharmaway.png" alt="Project Image">
        </div>
        <div class="project-text">
          <h2>Pharmaway</h2>
          <p>Implemented and maintained robust backend solutions using Laravel.
            Refactored old code to make it more efficient, resulting in a 50% improvement in response time and performance.
            Implemented Laravel's caching features to reduce database load and speed up response times.
            Designed and documented scalable RESTful APIs for seamless integration with front-end.
            Implemented advanced database optimization techniques, such as indexing, query optimization, and migrations, to ensure efficient data
            handling, even with large datasets.
            Writing well-designed, testable, efficient code by using the best software development practices.
            Scheduled and created detailed task breakdowns on ClickUp Software task management platform.</p>
            <a href="#">View Project</a>
      </div>
    </div>

    </div>

  </section>