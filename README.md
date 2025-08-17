# WordPress Docker Project

A complete WordPress development environment using Docker Compose.

## Services

- **WordPress**: Main application running on port 8000
- **MySQL 8.0**: Database server on port 3306
- **phpMyAdmin**: Database management interface on port 8080

## Quick Start

1. **Start the services:**
   ```bash
   docker-compose up -d
   ```

2. **Access WordPress:**
   - Open your browser and go to: http://localhost:8000
   - Follow the WordPress installation wizard

3. **Access phpMyAdmin:**
   - Database management: http://localhost:8080
   - Username: `wordpress`
   - Password: `wordpress`

## Configuration

### Database Credentials
- **Database Host**: `db:3306`
- **Database Name**: `wordpress`
- **Username**: `wordpress`
- **Password**: `wordpress`
- **Root Password**: `somewordpress`

### Ports
- WordPress: `8000`
- MySQL: `3306`
- phpMyAdmin: `8080`

## Development

### Custom Themes and Plugins
Place your custom themes and plugins in the `wp-content` directory. They will be automatically mounted into the WordPress container.

### Database Persistence
- Database data is stored in the `db_data` volume
- WordPress files are stored in the `wordpress_data` volume
- Your local `wp-content` directory is mounted for development

## Useful Commands

```bash
# Start services in background
docker-compose up -d

# View logs
docker-compose logs -f

# Stop services
docker-compose down

# Stop and remove volumes (WARNING: This will delete all data)
docker-compose down -v

# Restart a specific service
docker-compose restart wordpress

# Access WordPress container shell
docker-compose exec wordpress bash

# Access MySQL container shell
docker-compose exec db mysql -u wordpress -p wordpress
```

## Troubleshooting

### Port Conflicts
If you get port conflicts, modify the port mappings in `docker-compose.yml`:
```yaml
ports:
  - "8001:80"  # Change 8000 to another port
```

### Permission Issues
If you encounter permission issues with the wp-content directory:
```bash
# On Windows, ensure the directory has proper permissions
# On Linux/Mac, you might need to adjust ownership
sudo chown -R 33:33 wp-content
```

### Database Connection Issues
- Ensure the MySQL service is running: `docker-compose ps`
- Check MySQL logs: `docker-compose logs db`
- Verify network connectivity: `docker network ls`

## Production Considerations

For production use, consider:
- Changing default passwords
- Using environment variables for sensitive data
- Setting up SSL/TLS certificates
- Configuring proper backup strategies
- Setting `WORDPRESS_DEBUG: 0`

## File Structure

```
wordpress-site/
├── docker-compose.yml    # Docker services configuration
├── README.md            # This file
└── wp-content/          # Custom themes and plugins (create this directory)
    ├── themes/
    └── plugins/
```

## Next Steps

1. Create the `wp-content` directory for your custom content
2. Start the services with `docker-compose up -d`
3. Complete the WordPress installation
4. Begin developing your themes and plugins 