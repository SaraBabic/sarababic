# Setup

## Local

https://intentiondev.atlassian.net/wiki/spaces/DEV/pages/529399836/CMS+Craft#Installation-von-Craft

## Hosting

https://intentiondev.atlassian.net/wiki/spaces/DEV/pages/890241025/Craft+Setup+Einrichtung

## Auth (for installing intention composer plugins)

1. Create `auth.json` in root folder
2. Content of auth.json

```json
{
  "gitlab-token": {
    "git.intention.de": "TOKEN_FROM_GITLAB"
  }
}
```

## Setup

1. Set the container name inside your .ddev/config.yaml
2. Start DDEV Container and install composer dependencies

```bash
# Boot the project and install the starter project:
ddev start
ddev composer install
```

3. Rename `.env.example` -> `.env` and edit it
4. Run the Craft installer:

```bash
ddev craft install
ddev launch
```

5. Edit the allowed domains for connection via the API at the end of the .htaccess file

https://ddev.readthedocs.io/en/latest/users/quickstart/#craft-cms

# Run Server

```bash
# When server is not available (e. g. after system reboot)
ddev restart
```

# Deployment

Deployment is handled by Gitlab Pipelines according to our deployment worklfow:
https://intentiondev.atlassian.net/wiki/spaces/DEV/pages/814546945/Workflow+Deployment

1. Edit the variables inside the .gitlab-ci.yml
2. We need the following environment variables for the deployment:

- GITLAB_ACCESS_TOKEN --> The same token as in the auth.json file
- SSH_PRIVATE --> A private ssh key that is allowed to connect to the project servers

# Development Team:

- jan_feldmann@intention.de
- tim_schneider@intention.de
