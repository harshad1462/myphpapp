# My PHP Docker App

This project demonstrates how to serve a simple PHP application using Docker.

## Files
- `index.php`: The main PHP application file.
- `Dockerfile`: Configuration for building the Docker image.

## How to Run

1. **Build the Docker Image**:
   ```bash
   docker build -t my-php-app .
   ```

2. **Run the Docker Container**:
   ```bash
   docker run -d -p 8080:80 my-php-app
   ```

3. **Access the Application**:
   Open your browser and navigate to [http://localhost:8080](http://localhost:8080).

## Notes
- Ensure Docker is installed and running on your machine.
- You can modify the `index.php` file and rebuild the image to see changes.
