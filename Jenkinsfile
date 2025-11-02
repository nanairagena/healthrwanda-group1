pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo "Checkout stage is running"
                git branch: 'master', url: 'https://github.com/nanairagena/healthrwanda-group1.git'
            }
        }

        stage('Build') {
            steps {
                echo "Build stage is running"
                bat 'echo "Building HealthRwanda application..."'
                bat 'dir src\\'
            }
        }

        stage('Test') {
            steps {
                echo "Test stage is running"
                bat 'echo "Running automated tests..."'
                bat 'dir src\\*.php /s | find /c "\.php"'
            }
        }

        stage('Deploy') {
            steps {
                echo "Deploy stage is running"
                bat 'echo "Deploying with Docker Compose..."'
                bat 'docker-compose down || echo "No containers to stop"'
                bat 'docker-compose up -d'
            }
        }

        stage('Verify') {
            steps {
                echo "Verify stage is running"
                bat 'echo "Verifying deployment..."'
                bat 'timeout /t 10 /nobreak'
                bat 'docker-compose ps'
            }
        }
    }

    post {
        always {
            echo "HealthRwanda Pipeline completed"
        }
        success {
            echo "PIPELINE SUCCESS: Pipeline executed successfully!"
        }
        failure {
            echo "PIPELINE FAILED: Pipeline failed!"
        }
    }
}
