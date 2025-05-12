<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    User::truncate();
    Profile::truncate();
    Skill::truncate();
    Experience::truncate();
    Service::truncate();

    $user = User::create([
      "name" => "dedy priyatna",
      "email" => "dedypry30@gmail.com",
      "password" => bcrypt('H4nyaakusaja@')
    ]);

    $profile = Profile::create([
      "photo" => "/assets/img/avatar/profile.PNG",
      "user_id" => $user->id,
      "name" => "dedy priyatna",
      "degree" => "Master",
      "phone" => "+6281286141441",
      "address" => "Tangerang",
      "birthday" => "1991-12-30",
      "experience" => 5,
      "email" => $user->email,
      "complete_project" => 100,
      "about_me" => "My primary objective is to create a dynamic and inclusive work environment that promotes teamwork and creativity. I strive to empower my team members to reach their full potential while delivering high-quality solutions that meet organizational goals.",
    ]);

    Skill::insert([
      [
        "profile_id" => $profile->id,
        "title" => "React Js (NextJs, Remix)",
        "value" => 95,
        "color" => "bg-primary"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Mobile Apps (Flutter, React Native)",
        "value" => 93,
        "color" => "bg-primary"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Vue",
        "value" => 90,
        "color" => "bg-success"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "NodeJS, NestJS, Adonis",
        "value" => 98,
        "color" => "bg-warning"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Laravel",
        "value" => 93,
        "color" => "bg-danger"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Postgres, Mysql",
        "value" => 95,
        "color" => "bg-success"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "MongoDB, Firebase",
        "value" => 98,
        "color" => "bg-danger"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Message Broker (Kafka, RabbitMQ)",
        "value" => 85,
        "color" => "bg-info"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Deployment (CI/CD, GCP, AWS, Vps Ubuntu)",
        "value" => 80,
        "color" => "bg-primary"
      ],
    ]);

    Experience::insert([
      [
        "profile_id" => $profile->id,
        "position" => "Tech Lead",
        "company_name" => "PT. Vigo Technologi Indonesia | Jakarta",
        "start_at" => "2024-03-01",
        "finish_at" => null,
        "description" => '<ul>
                          <li><strong>Team Management:</strong> Leading and overseeing the development team to ensure projects are completed on time and meet quality standards.</li>
                          <li><strong>Architecture Design:</strong> Designing efficient and scalable system architectures for applications and products under development.</li>
                          <li><strong>Code Development:</strong> Involvement in coding, especially in creating core features and solving complex technical problems.</li>
                          <li><strong>Testing and Validation:</strong> Overseeing the testing process to ensure high-quality products, including unit testing, integration testing, and user acceptance testing.</li>
                          <li><strong>Mentoring:</strong> Providing guidance and support to team members, helping them develop technical and professional skills.</li>
                          <li><strong>Collaboration with Stakeholders:</strong> Communicating with project managers, designers, and other stakeholders to understand project requirements and ensure alignment with the product vision.</li>
                          <li><strong>Project Management:</strong> Assisting in project planning and management, including estimating time and resources needed.</li>
                          <li><strong>Problem Solving:</strong> Identifying and resolving technical issues that arise during development and implementation.</li>
                          <li><strong>Performance Monitoring:</strong> Overseeing application and system performance, and making optimizations as necessary.</li>
                          <li><strong>Best Practices Implementation:</strong> Applying best practices in software development and Agile methodologies to enhance team efficiency.</li>
                          <li><strong>Documentation:</strong> Creating and maintaining technical documentation for developed systems and processes.</li>
                        </ul>',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "Front End Developer (Project Based/freelance) | Jakarta",
        "company_name" => "PT. Sinar Sakti International",
        "start_at" => "2024-01-01",
        "finish_at" => "2024-03-01",
        "description" => '<ul>
                          <li>Designed and implemented website interface for TV, mobile, desktop and tablets.</li>
                          <li>Coded software updates to add new features, close security holes and resolve defects.</li>
                          <li>Designed and developed software systems with Flutter.</li>
                          <li>Collaborated across technical and design teams to produce innovative software applications.</li>
                          <li>Kept detailed records of releases and software fixes for optimum traceability.</li>
                          <li>Refined and upgraded existing software to continuously improve performance.</li>
                          <li>Revealed new product features and project updates to C-level executives through high-quality presentations.</li>
                          <li>Wrote clean and dynamic code, leveraging expertise across multiple programming languages to meet diverse requirements.</li>
                          <li>Developed testable software using Agile methodologies to create high-quality deliverables.</li>
                          <li>Integrated third-party applications into existing software, enhancing features and performance.</li>
                          <li>Harnessed Agile project management to support top-quality mobile apps across development lifecycle.</li>
                        </ul>',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "Senior Software Engineer (Project Based/freelance) | Tangerang",
        "company_name" => "Sprout Digital Lab",
        "start_at" => "2023-10-01",
        "finish_at" => "2023-12-01",
        "description" => '<ul>
                        <li>Wrote clean and dynamic code in NestJS.</li>
                        <li>Service Oriented Architecture / Microservices Architecture.</li>
                        <li>Wrote and developed new and well-tested code for different software projects.</li>
                        <li>Resolved Jira tickets with comprehensive bug fixes.</li>
                        <li>Integrated third-party applications into existing software, enhancing features and performance.</li>
                        <li>Built and maintained code libraries used to produce consistent and reliable code.</li>
                        <li>Wrote clean and dynamic code, leveraging expertise across multiple programming languages to meet diverse requirements.</li>
                        <li>Managed team resources to deliver on sprint goals within expected timeframes.</li>
                        <li>Supported software code review, system integration and validation in line with company and regulatory requirements.</li>
                        <li>Assisted quality assurance team with testing software, investigating bugs and developing test cases.</li>
                        <li>Developed testable software using Agile methodologies to create high-quality deliverables.</li>
                      </ul>',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "Senior Backend Engineer (Fulltime) | Jakarta",
        "company_name" => "PT. Aneka Juragan Material",
        "start_at" => "2022-07-01",
        "finish_at" => "2023-08-01",
        "description" => '<ul>
                          <li>Collaborate with cross-functional teams including design, product management, and other engineering teams to develop software solutions aligned with business goals.</li>
                          <li>Lead the design and implementation of scalable, secure, and high-performance applications that enable seamless online browsing, shopping, and customization of jewelry pieces.</li>
                          <li>Architect and develop backend systems, databases, APIs, and integrations to support both customer-facing and internal applications.</li>
                          <li>Mentor and guide junior engineers, conducting code reviews and ensuring adherence to best practices and coding standards.</li>
                          <li>Stay current with industry trends, emerging technologies, and software development best practices, and advocate for their integration when appropriate.</li>
                          <li>Troubleshoot and resolve software defects and performance issues, collaborating with the team to identify root causes and implement solutions.</li>
                          <li>Monitor and troubleshoot production issues, providing timely resolutions.</li>
                          <li>Implement APIs and integrate them with other services and databases.</li>
                          <li>Develop software optimized for usability, performance, maintenance, etc.</li>
                          <li>Setup CI/CD, Docker, and Google Cloud Platform (GCP).</li>
                          <li><strong>Project:</strong> <a href="https://juraganmaterial.id" target="_blank">juraganmaterial.id</a> – Built content management system using Node.js, PostgreSQL, Firebase, and GCP.</li>
                        </ul>
                        ',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "FullStack Developer (Fulltime) | Jakarta",
        "company_name" => "PT. Jafra Cosmetic Indonesia",
        "start_at" => "2021-06-01",
        "finish_at" => "2022-07-01",
        "description" => '<ul>
                            <li>Designed and developed the backend architecture to support request/order management for company staff to place orders with vendors.</li>
                            <li>Integrated a reimbursement module for staff to submit and track reimbursement requests.</li>
                            <li>Implemented a ticketing system for user requests to the IT department, ensuring efficient communication and issue resolution.</li>
                            <li>Added localization features for seamless usage in different countries where Jafra operates.</li>
                            <li>Ensured data security and privacy measures to protect sensitive information.</li>
                            <li>Optimized the application performance for fast response times.</li>
                            <li>Collaborated with cross-functional teams for a user-friendly application.</li>
                            <li>Conducted testing and debugging to ensure a bug-free application.</li>
                            <li>Provided technical support and guidance to the team.</li>
                            <li>Contributed to documentation for better understanding of the backend structure.</li>
                            <li>Assisted with functionality and performance improvements to create dynamic, robust applications for positive customer experiences.</li>
                            <li>Maintained accountability for troubleshooting and resolving support issues.</li>
                            <li>Gathered and examined user feedback to improve the capacity of the software.</li>
                            <li><strong>Project:</strong> Jafra Office Management (JOM) — built using Laravel, Vue.js, Flutter, Firebase, PostgreSQL, DevOps (Ubuntu), Nginx, and Pusher.</li>
                          </ul>',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "Senior Backend Engineer (Fulltime) | Jakarta",
        "company_name" => "PT. Solusi Ekosistem Global",
        "start_at" => "2020-03-01",
        "finish_at" => "2021-03-01",
        "description" => '<ul>
                            <li>Conducted UI tests to achieve cost-effective measures and optimize performance.</li>
                            <li>Communicated technical and design requirements to determine performance, reliability, and accessibility.</li>
                            <li>Collaborated with departments to discuss technical issues, software system design, and maintenance.</li>
                            <li>Revised existing software to upgrade interfaces and elevate performance.</li>
                            <li>Oversaw innovative technologies to improve applications and deliver speedy outcomes.</li>
                            <li>Oversaw system testing and validation procedures to automate functionality and establish reliability.</li>
                            <li>Troubleshot and debugged software to identify and rectify errors, minimizing work disruptions and downtime.</li>
                            <li>Attended conferences and educational events to network with industry leaders and amplify skills.</li>
                            <li><strong>Projects:</strong>
                              <ul>
                                <li><a href="https://idnstore.tw" target="_blank">idnstore.tw</a></li>
                                <li><a href="https://indomatjar.com" target="_blank">indomatjar.com</a></li>
                                <li>China Event Store</li>
                              </ul>
                              <p><strong>Tech Stack:</strong> Laravel, Vue.js, Node.js, React.js, Flutter, PostgreSQL, Firebase, MongoDB, Pusher, Socket.io, DevOps (Ubuntu), NGINX</p>
                            </li>
                          </ul>
                          ',
      ],
      [
        "profile_id" => $profile->id,
        "position" => "FullStack Engineer (Project Based/Freelance) | Jakarta",
        "company_name" => "PT. Rekayasa Aplikasi Digital",
        "start_at" => "2019-11-01",
        "finish_at" => "2020-03-01",
        "description" => '<ul>
                            <li>Completed assigned tasks and reached targets while working fully remotely.</li>
                            <li>Maintained and improved existing websites and applications, enhancing user experience and functionality.</li>
                            <li>Developed software systems using scientific analysis and mathematical models to evaluate outcomes and design consequences.</li>
                            <li>Reviewed and contributed to ongoing designs, standards, and development methodologies for websites, intranet, and application projects.</li>
                            <li>Gathered and examined user feedback to improve software performance and capacity.</li>
                            <li>Troubleshot and debugged software to identify and fix errors, minimizing work disruptions and downtime.</li>
                            <li>Collaborated with DevOps engineers to ensure smooth deployment to production with minimal disruption to end users.</li>
                            <li>Estimated project scope and coordinated with the project management team to forecast milestones and timelines.</li>
                            <li><strong>Projects:</strong> PLN, kampusDigi — built using Laravel, Vue.js, Node.js, React.js, and React Native.</li>
                          </ul>',
      ],
    ]);

    Service::insert([
      [
        "profile_id" => $profile->id,
        "title" => "Full-Stack Web Development",
        "description" => "Develop scalable and maintainable web applications using Laravel, Node.js, and Vue.js with a strong focus on performance and security.",
        "logo" => "fa-laptop-code" // Font Awesome class
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Mobile App Development",
        "description" => "Create modern, cross-platform mobile applications using Flutter, seamlessly integrated with APIs and cloud services like Firebase.",
        "logo" => "fa-mobile-alt"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "Backend Architecture & API Development",
        "description" => "Design and implement robust RESTful APIs and microservices using NestJS and PostgreSQL, ensuring clean architecture and high availability.",
        "logo" => "fa-database"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "DevOps & Cloud Deployment",
        "description" => "Automate deployments using CI/CD, Docker, and manage scalable cloud infrastructure on GCP with best practices for uptime and security.",
        "logo" => "fa-cloud"
      ],
      [
        "profile_id" => $profile->id,
        "title" => "System Integration & Realtime Features",
        "description" => "Integrate third-party systems and implement realtime capabilities using technologies like Pusher and Socket.io to enhance user interactivity.",
        "logo" => "fa-plug"
      ]
    ]);
  }
}
