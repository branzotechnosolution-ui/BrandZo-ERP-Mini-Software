# BrandZo ERP Multi-Cloud Terraform Infrastructure

terraform {
  required_version = ">= 1.5.0"
  required_providers {
    aws = { source = "hashicorp/aws", version = "~> 5.0" }
    google = { source = "hashicorp/google", version = "~> 5.0" }
    azurerm = { source = "hashicorp/azurerm", version = "~> 3.0" }
  }
}

provider "aws" { region = "us-east-1" }
provider "google" { project = "brandzo-erp-prod"; region = "us-central1" }
provider "azurerm" { features {} }

# AWS EKS Cluster
module "aws_eks" {
  source          = "terraform-aws-modules/eks/aws"
  cluster_name    = "brandzo-eks-prod"
  cluster_version = "1.28"
  subnet_ids      = ["subnet-1111", "subnet-2222"]
  vpc_id          = "vpc-prod123"
}

# GCP GKE Cluster
resource "google_container_cluster" "primary" {
  name     = "brandzo-gke-prod"
  location = "us-central1-a"
  initial_node_count = 3
}

# Azure AKS Cluster
resource "azurerm_kubernetes_cluster" "aks" {
  name                = "brandzo-aks-prod"
  location            = "East US"
  resource_group_name = "brandzo-prod-rg"
  dns_prefix          = "brandzo-k8s"
  default_node_pool { name = "default"; node_count = 3; vm_size = "Standard_D2s_v3" }
  identity { type = "SystemAssigned" }
}
