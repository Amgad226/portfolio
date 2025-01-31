<style>

  #personal-projects {
    /* width: 100vw; */
    padding: 40px 20px;
    box-sizing: border-box;
    /* background: linear-gradient(135deg, #e3f2fd, #e1bee7); */
  }

  .personal-projects {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
  }

  .personal-project-card {
    /* background: #4d3b3b; */
    border-radius: 16px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .personal-project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .project-logo {
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    height: 120px;
    border-bottom: 1px solid #eee;
  }

  .project-logo img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
  }

  .project-content {
    padding: 20px;
  }

  .project-name {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #37474f;
  }

  .project-description {
    font-size: 1rem;
    line-height: 1.6;
    color: #616161;
    margin-bottom: 20px;
  }

  .project-images {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 10px;
  }

  .project-images img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s;
  }

  .project-images img:hover {
    transform: scale(1.1);
  }

  .project-link {
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
    color: #0288d1;
    margin-top: 10px;
    transition: color 0.3s;
  }

  .project-link:hover {
    color: #01579b;
  }
</style>

<section id="personal-projects">
  <h1 style="text-align: center; font-size: 3rem; margin-bottom: 40px; color: #333;">Personal Projects</h1>
  <div class="personal-projects">
    <!-- Project 1 -->
    <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>
    <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>  <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 1</h2>
        <p class="project-description">
          This is a description of the first personal project. It highlights the main features, technologies used, and the goals of the project.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>
    <!-- Project 2 -->
    <div class="personal-project-card">
      <div class="project-logo">
        <img src="./assets/pharmaway.png" alt="Project Logo">
      </div>
      <div class="project-content">
        <h2 class="project-name">Personal Project 2</h2>
        <p class="project-description">
          Description of the second personal project, focusing on its unique features, problem-solving capabilities, and innovative design.
        </p>
        <div class="project-images">
          <img src="./assets/pharmaway.png" alt="Project Screen 1">
          <img src="./assets/pharmaway.png" alt="Project Screen 2">
          <img src="./assets/pharmaway.png" alt="Project Screen 3">
        </div>
        <a href="#" class="project-link">View Project</a>
      </div>
    </div>
  </div>
</section>
