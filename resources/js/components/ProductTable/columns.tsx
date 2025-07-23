import { ColumnDef } from "@tanstack/react-table"

export type Product = {
    product_id: number;
    product_name: string;
    product_price: number;
    product_category_id: number;
    product_supplier_id: number;
    product_stock: number;
    category_id: number;
}

export const columns: ColumnDef<Product>[] = [
    {
        accessorKey: "product_id",
        header: "ID"
    },
    {
        accessorKey: "product_name",
        header: "Name"
    },
    {
        accessorKey: "product_price",
        header: "Price"
    },
    {
        accessorKey: "category.category_name",
        header: "Category"
    },
    {
        accessorKey: "supplier.supplier_name",
        header: "Supplier"
    },
    {
        accessorKey: "product_stock",
        header: "Stock"
    }
]
