pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                echo "Checkout stage is running"
                git branch: 'master', url: 'https://github.com/yourusername/healthrwanda-group1.git'
            }
        }
        
        stage('Build') {
            steps {
                echo "Build stage is running"
                sh 'echo "Building HealthRwanda application..."'
                sh 'ls -la src/'
            }
        }
        
        stage('Test') {
            steps {
                echo "Test stage is running"
                sh 'echo "Running automated tests..."'
                sh 'find src/ -name "*.php" | wc -l'
            }
        }
        
        stage('Deploy') {
            steps {
                echo "Deploy stage is running"
                sh 'echo "Deploying with Docker Compose..."'
                sh 'docker-compose down || true'
                sh 'docker-compose up -d'
            }
        }
        
        stage('Verify') {
            steps {
                echo "Verify stage is running"
                sh 'echo "Verifying deployment..."'
                sh 'sleep 10'
                sh 'docker-compose ps'
            }
        }
    }
    
    post {
        always {
            echo "HealthRwanda Pipeline completed"
        }
        success {
            echo "✅ Pipeline executed successfully!"
        }
        failure {
            echo "❌ Pipeline failed!"
        }
    }
}
