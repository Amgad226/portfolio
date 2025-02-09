   @vite('resources/css/about.css')
   <section id="about">
      <p class="about-p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="about-section-container">
   
        <div class="about-details-container">
          <div class="about-containers">
            <x-about.education-cart title='Experience' content="3+ years Backend Development"></x-education-cart>
            <x-about.education-cart title='Experience' content="1+ years Devops"></x-education-cart>
            <x-about.education-cart title='Education' content="Bachelor of Science in Informatics Technology, Major in Software Engineering"></x-education-cart>
            <x-about.education-cart title='Certificate' content="Recommendation certificate from York British Academy" link="https://yorkbritishacademy.uk/CertificatesSearch?certificateIdTerm=IT-854825"></x-education-cart>
          </div>

          <div class="about-text-container">
            <p>
              Passionate software engineer with solid backend development skills cultivated through real-world corporate projects.
              Skilled in building reliable backend solutions suitable for various project needs. Currently diving into DevOps to blend software
              development with IT operations, aiming to optimize project workflows and team harmony. Always on the lookout for new challenges
              to broaden expertise and drive innovation at the crossroads of software engineering and DevOps.
            </p>
          </div>
        </div>
      </div>
      <x-utils.arrow-move :to="'./#experience'"></x-utils.arrow-move>

    </section>

