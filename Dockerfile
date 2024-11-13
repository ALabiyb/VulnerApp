# Use a basic Nginx image
FROM nginx

# Copy the contents of the current directory into the Nginx container
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80
