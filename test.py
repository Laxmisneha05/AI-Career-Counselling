from langchain.llms import CTransformers

llm = CTransformers(
        model = "llama-2-7b.ggmlv3.q8_0.bin",
        model_type="llama",
        max_new_tokens = 512,
        temperature = 0.5
    )

print(llm.predict('Hi'))