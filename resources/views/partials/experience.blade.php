<section id="experience">
    <header class="experience-heading">
        <p class="section-kicker">Experience overview</p>
        <h1 class="title">Experience</h1>
        <p class="section-intro">The three areas I work across when taking a product from an idea to production.</p>
    </header>

    <div class="experience-details-container">
        <article class="capability-card capability-card--primary">
            <div class="capability-heading">
                <span class="capability-number">01</span>
                <div>
                    <p class="capability-label">Backend engineering</p>
                    <h2>Production backend systems</h2>
                </div>
            </div>
            <p class="capability-copy">Production services built for clear ownership, reliable data flow, and practical performance.</p>
            <div class="skill-groups">
                <div><h3>Core stack</h3><p>Node.js · TypeScript · NestJS · Laravel · Django · Python</p></div>
                <div><h3>Systems</h3><p>PostgreSQL · MongoDB · Redis · RabbitMQ · REST · GraphQL · WebSockets</p></div>
            </div>
            <button class="capability-toggle" type="button" aria-expanded="false" aria-controls="backend-details">View full stack</button>
            <div id="backend-details" class="capability-expanded">
                <p><strong>Architecture</strong> SOLID, design patterns, modular systems, microservices, monorepos, and gRPC.</p>
                <p><strong>Data access</strong> Prisma, Mongoose, migrations, indexing, caching, and query performance.</p>
            </div>
        </article>

        <article class="capability-card">
            <div class="capability-heading">
                <span class="capability-number">02</span>
                <div>
                    <p class="capability-label">Cloud & DevOps</p>
                    <h2>Infrastructure, delivery, and operations</h2>
                </div>
            </div>
            <p class="capability-copy">Repeatable infrastructure and delivery workflows that teams can operate with confidence.</p>
            <div class="skill-groups">
                <div><h3>Infrastructure</h3><p>AWS · Docker · Terraform · Ansible · Nginx · Linux</p></div>
                <div><h3>Delivery & visibility</h3><p>GitHub Actions · GitLab CI/CD · Sentry · Prometheus · Grafana · Loki</p></div>
            </div>
            <button class="capability-toggle" type="button" aria-expanded="false" aria-controls="devops-details">View full stack</button>
            <div id="devops-details" class="capability-expanded">
                <p><strong>AWS</strong> EC2, RDS, S3, Lambda, ECS/Fargate, IAM, and CloudWatch.</p>
                <p><strong>Operations</strong> Logs, metrics, alerts, deployment automation, and cost-aware improvements.</p>
            </div>
        </article>

        <article class="capability-card">
            <div class="capability-heading">
                <span class="capability-number">03</span>
                <div>
                    <p class="capability-label">Product engineering</p>
                    <h2>Web, mobile, and engineering quality</h2>
                </div>
            </div>
            <p class="capability-copy">Useful interfaces connected cleanly to backend systems and supported by automated checks.</p>
            <div class="skill-groups">
                <div><h3>Product stack</h3><p>React · React Native · React Query · Zustand · Redux Toolkit</p></div>
                <div><h3>Quality & leadership</h3><p>Jest · Cypress · E2E testing · Code reviews · Mentoring · Automation</p></div>
            </div>
            <button class="capability-toggle" type="button" aria-expanded="false" aria-controls="product-details">View full stack</button>
            <div id="product-details" class="capability-expanded">
                <p><strong>Quality</strong> Unit, integration, E2E, and performance testing across product workflows.</p>
                <p><strong>Leadership</strong> Reviews, mentoring, technical planning, MCP, AI agents, and workflow automation.</p>
            </div>
        </article>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.capability-toggle').forEach((button) => {
            button.addEventListener('click', () => {
                const card = button.closest('.capability-card');
                const isExpanded = card.classList.toggle('is-expanded');

                button.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
                button.textContent = isExpanded ? 'Hide full stack' : 'View full stack';
            });
        });
    });
</script>
